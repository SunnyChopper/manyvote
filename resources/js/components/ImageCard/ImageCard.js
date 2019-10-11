import React, { Component } from 'react';
import './ImageCard.css';

class ImageCard extends Component {
	state = {
		image_url: '',
		title: '',
		body: ''
	};

	const style = [
		'backgroundImage' : 'url({this.state.image_url})'
	];

	render() {
		return(
			<div className="image-card">
				<div className="image" style={style}></div>
				<div className="body">
					<h4>{this.state.title}</h4>
					<p>{this.state.body}</p>
				</div>
			</div>
		);
	}
}

export default ImageCard;