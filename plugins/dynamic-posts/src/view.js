document.addEventListener('DOMContentLoaded', function () {
    let page = 1;
    let totalPosts = null;
    const loadMoreButton = document.querySelector('.dynamic-posts__show-more-button');
    const loadMoreContainer = document.querySelector('.dynamic-posts__show-more');
    const postsContainer = document.querySelector('.dynamic-posts');

    const postsNumber = (total) => {
        const current = postsContainer.children.length;
        if (total <= current) {
            loadMoreContainer.style.display = 'none';
            loadMoreContainer.style.visibility = 'hidden';
        }
    }
   
    if (loadMoreButton) {
        loadMoreButton.addEventListener('click', async function () {
            
            try {
                const response = await fetch(`/wp-json/wp/v2/posts?page=${page}&per_page=${2}&_embed`);
                if (!response.ok) {
                    throw new Error('Request failed');
                }
            
                const newPosts = await response.json();
                const headers = response.headers;
                totalPosts = parseInt(headers.get('X-WP-Total'));
                if (newPosts.length > 0) {
                    page++;

                    newPosts.forEach((post) => {
                        const postId = post._links.self[0].href.split('/').pop();
                        //create structure
                        const dynamicPostBox = document.createElement('div');
                        const dynamicPostImage = document.createElement('img');
                        const dynamicPostContent = document.createElement('div');
                        const dynamicPostTitle = document.createElement('h3');
                        const dynamicPostExcerpt = document.createElement('p');
                        //add classes and attr
                        dynamicPostImage.className = "dynamic-posts__image";
                        dynamicPostContent.className = "dynamic-posts__content";
                        dynamicPostBox.className = "dynamic-posts__box";
                        dynamicPostBox.setAttribute('data-id', postId);
                        dynamicPostTitle.className = "dynamic-posts__title";
                        dynamicPostExcerpt.className = "dynamic-posts__excerpt";
                       
                        dynamicPostImage.src = post._embedded['wp:featuredmedia']['0'].source_url;
                        dynamicPostTitle.textContent = post.title.rendered;
                        dynamicPostExcerpt.innerHTML = post.excerpt.rendered;
                        //append children
                        dynamicPostContent.appendChild(dynamicPostTitle);
                        dynamicPostContent.appendChild(dynamicPostExcerpt);
                        dynamicPostBox.appendChild(dynamicPostImage);
                        dynamicPostBox.appendChild(dynamicPostContent);
                        postsContainer.appendChild(dynamicPostBox);
            
                        postsNumber(totalPosts)
                    });
                } else {
                    loadMoreButton.style.display = 'none';
                }
            } catch (error) {
                console.error('Error fetching or rendering posts:', error);
                loadMoreButton.disabled = false;
            }
        });
        
    }
});