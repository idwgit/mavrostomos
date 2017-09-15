jQuery(document).ready(function($){
	//this is used for the video effect only
	if( $('.video-background').length > 0 ) {
		var videoWrapper = $('.video-background');
		var	mq_video = window.getComputedStyle(document.querySelector('.video-background'), '::after').getPropertyValue('content').replace(/"/g, "").replace(/'/g, "");
		if( mq_video == 'desktop' ) {
			// we are not on a mobile device 
			var	videoUrl = videoWrapper.data('video');
			var	video = $('<video loop><source src="'+videoUrl+'.mp4" type="video/mp4" /><source src="'+videoUrl+'.webm" type="video/webm" /></video>');
			video.appendTo(videoWrapper);
			video.get(0).play();
		}
	}
});