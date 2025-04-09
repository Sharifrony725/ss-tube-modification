const DownloadForm = document.getElementById('download-form');
const qualityList = document.getElementById('quality-list');
const videoOptions = document.getElementById('video-options');
const videoThumbnail = document.getElementById('video-thumbnail');
const videoTitle = document.getElementById('video-title');
const videoDuration = document.getElementById('video-duration');
const downloadButton = document.getElementById('download-button');

DownloadForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const url = e.target.url.value.trim();
    if (!url) return;

    document.getElementById('url-input').value = '';
    videoOptions.style.display = 'block';

    const videoId = extractYouTubeID(url);
    if (videoId) {
        // Set thumbnail
        videoThumbnail.src = `https://img.youtube.com/vi/${videoId}/hqdefault.jpg`;

        // // Set fake title and duration (you can later replace with API call)
        // videoTitle.innerText = 'Fetching video title...';
        // videoDuration.innerText = 'Duration: 3:45'; // Placeholder

        // // Simulate fetching (fake title)
        // setTimeout(() => {
        //     videoTitle.innerText = 'Sample Video Title'; // Replace dynamically if real API used
        // }, 1000);
    } else {
        alert('Invalid YouTube URL');
        return;
    }

    generateQualityOptions(url);
});

const generateQualityOptions = (url) => {
    const formats = [
        { label: "1080p.mp4", format: "1080" },
        { label: "720p.mp4", format: "720" },
        { label: "480p.mp4", format: "480" },
        { label: "360p.mp4", format: "360" }
    ];

    qualityList.innerHTML = '';

    formats.forEach(item => {
        const option = document.createElement('div');
        option.style.marginBottom = '10px';
        option.innerHTML = `
            <span style="margin-right: 10px;">${item.label}</span>
            <button 
                style="background: #64C896; border: none; padding: 8px 12px; cursor: pointer; color: white; border-radius: 5px;"
                onclick="download('${url}', '${item.format}')"
            >
                Download
            </button>
        `;
        qualityList.appendChild(option);
    });
}

const download = (url, format) => {
    downloadButton.style.marginTop = '20px';
    downloadButton.innerHTML = `
        <iframe 
            style="height: 52px; width: 100%; border: none; overflow: hidden;" 
            src="https://loader.to/api/button/?url=${encodeURIComponent(url)}&f=${format}">
        </iframe>`;
}

// Helper function to extract YouTube video ID
const extractYouTubeID = (url) => {
    const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
    const match = url.match(regExp);
    return (match && match[2].length == 11) ? match[2] : null;
}
