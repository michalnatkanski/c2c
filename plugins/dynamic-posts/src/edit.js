
import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import { InspectorControls } from '@wordpress/block-editor';
import { TextControl, PanelBody } from '@wordpress/components';
import { useState, useEffect } from '@wordpress/element';
import apiFetch from '@wordpress/api-fetch';
import DOMPurify from 'dompurify';

import './editor.scss';

export default function Edit(props) {
	const { attributes, setAttributes } = props;
	const [posts, setPosts] = useState([]);
	const [page, setPage] = useState(1);
	const [totalPosts, setTotalPosts] = useState(null);

	useEffect(() => {
		const fetchPosts = async () => {
			try {
				const response = await apiFetch({
					path: `/wp/v2/posts?page=${page}&per_page=${attributes.postsPerView}&_embed`,
					parse: false,
				});

				const newPosts = await response.json();
				setPosts((prevPosts) => [...prevPosts, ...newPosts]);

				setTotalPosts(parseInt(response.headers.get('X-WP-Total'), 10));
			} catch (error) {
				console.error('Error fetching posts', error);
			}
		};

		fetchPosts();
	}, [page]);

	const loadMorePosts = async () => {
		setPage((prevPage) => prevPage + 1);
	};

	return (
		<div {...useBlockProps()}>
			<div className="dynamic-posts">
				{posts.map((post) => (
					<div className="dynamic-posts__box" key={post.id}>
						<img className='dynamic-posts__image' src={post._embedded['wp:featuredmedia']['0'].source_url} />
						<div className='dynamic-posts__content'>
							<h2 className='dynamic-posts__title'>{post.title.rendered}</h2>
							<p className='dynamic-posts__excerpt' dangerouslySetInnerHTML={{ __html: DOMPurify.sanitize(post.excerpt.rendered) }}/>
						</div>
					</div>
				))}
			</div>
			{posts.length < totalPosts ? (
				<div class="dynamic-posts__show-more">
					<div class="dynamic-posts__show-more-container">
						<button onClick={loadMorePosts} className='dynamic-posts__show-more-button'>Load more</button>
					</div>
				</div>	
			) : null}
			<InspectorControls>
				<PanelBody title="Block Settings">
					<TextControl
						label="Posts Per View"
						type="number"
						value={attributes.postsPerView}
						onChange={(value) => setAttributes({ postsPerView: parseInt(value) })}
					/>
				</PanelBody>
			</InspectorControls>
		</div>
	);
}
