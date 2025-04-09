<!DOCTYPE html>
<html lang="en">

<head>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3MKBC5DW01"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-3MKBC5DW01');
    </script>

    <meta name="ahrefs-site-verification" content="fefbcd5541f243f5a3934ddcb6f9ad7a950b6e290563c3554bcf11ca863bc8f5">





    <link rel="icon" type="image/png" href="img/favicon_logo.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSYouTube: Free Download Video from YouTube</title>
    <meta name="description" content="SS YouTube Video Downloader is a part of savefrom net youtube. Easily Download & save video from youtube with high-quality using ssvideodownloader tools.">

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <script>
        document.addEventListener('DOMContentLoaded', () => {
            const faqItems = document.querySelectorAll('.faq-item');

            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');

                question.addEventListener('click', () => {
                    const answer = item.querySelector('.faq-answer');
                    const isOpen = answer.classList.contains('hidden');

                    // Close all answers
                    faqItems.forEach(i => {
                        i.querySelector('.faq-answer').classList.add('hidden');
                    });

                    // Toggle the clicked one
                    if (isOpen) {
                        answer.classList.remove('hidden');
                    }
                });
            });
        });
    </script> -->
</head>

<body class="text-muted ">
    <!-- Header Section -->
    <header class="text-center py-8 bg-[#1a0033] text-white px-4 md:px-16">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <a class="flex items-center mb-4 md:mb-0" href="javascript:location.reload();">
                <img class="w-10 h-10 mr-2" src="./img/logo.jpg" alt="Logo">
                <h2 class="text-lg font-bold">ss-youtube</h2>
            </a>
        </div>
        <h1 class="font-bold text-2xl md:text-3xl mt-4">YouTube Video Downloader</h1>
        <!-- <form id="download-form">
        <div class="flex flex-col lg:gap-0 gap-4 sm:flex-row  justify-center mt-6 w-full max-w-lg mx-auto">
            <input type="text" required type="text" name="url" id="url-input" placeholder="Paste your video link here"
                class="p-3 w-full sm:w-2/3 rounded-t-lg sm:rounded-l-lg sm:rounded-tr-none text-black">
            <button id="download-button" type="submit"
                class="bg-red-500 text-white px-6 py-3 rounded-b-lg sm:rounded-r-lg sm:rounded-bl-none hover:bg-red-600 w-full sm:w-auto">Download</button>
        </div>
    </form> -->

        <!-- <form id="download-form" class="w-full max-w-lg mx-auto mt-6">
            <div class="flex flex-col sm:flex-row gap-4 lg:gap-0 justify-center">
                <input
                    type="text"
                    id="url-input"
                    name="url"
                    required
                    placeholder="Paste your video link here"
                    class="p-3 w-full sm:w-2/3 rounded-t-lg sm:rounded-l-lg sm:rounded-tr-none text-black">
                <button
                    type="submit"
                    class="bg-red-500 text-white px-6 py-3 rounded-b-lg sm:rounded-r-lg sm:rounded-bl-none hover:bg-red-600 w-full sm:w-auto">
                    Fetch Video
                </button>
            </div>
        </form> -->

        <form id="download-form" class="w-full max-w-4xl mx-auto mt-6">
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <input
                    type="text"
                    id="url-input"
                    name="url"
                    required
                    placeholder="Paste your video link here"
                    class="p-3 w-full sm:w-2/3 rounded-t-lg sm:rounded-l-lg sm:rounded-tr-none text-black">
                <button
                    type="submit"
                    class="bg-red-500 text-white px-6 py-3 rounded-b-lg sm:rounded-r-lg sm:rounded-bl-none hover:bg-red-600 w-full sm:w-auto">
                    Fetch Video
                </button>
            </div>
        </form>

        <!-- Result section -->
        <div id="video-options" class="w-full max-w-4xl mx-auto mt-10 hidden">
            <div class="flex flex-col md:flex-row gap-8 bg-[#0d0225] p-6 rounded-lg shadow-lg">

                <!-- Left side: Thumbnail -->
                <div class="flex flex-col items-center md:items-start text-center md:text-left">
                    <img id="video-thumbnail" src="" alt="Thumbnail" class="w-80 rounded-lg mb-4">
                    <!-- <div class="text-white font-semibold" id="video-title">Video Title</div>
                    <div class="text-gray-400 mt-2" id="video-duration">Duration: 00:00</div> -->
                </div>

                <!-- Right side: Quality list -->
                <div class="flex-1">
                    <h3 class="text-white text-xl font-bold mb-4 flex items-center gap-2">
                        <svg class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.615 3.184A3.582 3.582 0 0 0 17.114 2H6.886a3.582 3.582 0 0 0-2.5 1.184C3.184 4.388 3 5.464 3 6.436v11.128c0 .972.184 2.048 1.386 3.252a3.582 3.582 0 0 0 2.5 1.184h10.228a3.582 3.582 0 0 0 2.5-1.184c1.202-1.204 1.386-2.28 1.386-3.252V6.436c0-.972-.184-2.048-1.386-3.252zM10 15.5V8.5l6 3.5-6 3.5z" />
                        </svg>
                        Video
                    </h3>
                    <div id="quality-list" class="flex flex-col gap-4">
                        <!-- Dynamic quality list comes here -->
                    </div>
                    <button id="show-more" class="text-blue-400 mt-4 hover:underline hidden">Show more</button>
                </div>

            </div>
        </div>

        <!-- Download button (if you want separate area) -->
        <div id="download-button" class="w-full max-w-4xl mx-auto mt-6"></div>



        <div id="video-options" class="w-full max-w-lg mx-auto mt-8 hidden">
            <h3 class="text-lg font-semibold mb-4">Download video as:</h3>
            <div id="quality-list" class="flex flex-col gap-2"></div>
        </div>

        <div id="download-button" class="w-full max-w-lg mx-auto mt-4"></div>

        <p class="mt-2 text-sm">Scanned by <span class="font-bold">Norton™ Safe Web</span></p>
    </header>

    <section id="videoDetails" class="hidden text-center mt-8 bg-[#1a0033] text-white px-4 md:px-16 py-6">
        <div class="flex flex-col lg:flex-row justify-center items-center lg:items-start gap-6">
            <div class="text-center lg:text-left">
                <img id="thumbnail" class="w-40 sm:w-48 rounded-lg mx-auto lg:mx-0" src="" alt="Video Thumbnail">
                <p id="videoTitle" class="mt-2 font-semibold"></p>
                <p id="videoDuration" class="text-gray-300"></p>
            </div>
            <div class="bg-[#22004a] p-4 sm:p-6 rounded-lg w-full lg:w-auto">
                <h3 class="text-lg sm:text-xl font-bold">Download video as:</h3>
                <div id="downloadOptions" class="mt-4"></div>
            </div>
        </div>
    </section>

    <!-- Supported Platforms Section -->
    <section class="text-center py-12 bg-white text-black px-4">
        <p class="p-4 md:p-8 max-w-3xl mx-auto">
            SSYouTube is your premier online video downloader, designed to bypass YouTube's download restrictions.
            We bridge the gap, giving you a fast and reliable way to download YouTube videos.
            Our user-friendly interface makes accessing your favorite content a breeze.
        </p>
        <h2 class="text-2xl font-bold mb-6">Supported Platforms:</h2>

        <div class="flex flex-wrap justify-center gap-6 md:gap-12">
            <img src="./img/windows.svg" alt="Windows" class="w-24 sm:w-32 md:w-40 lg:w-48">
            <img src="./img/apple.svg" alt="Apple" class="w-24 sm:w-32 md:w-40 lg:w-48">
            <img src="./img/android.svg" alt="Android" class="w-24 sm:w-32 md:w-40 lg:w-48">
            <img src="./img/linux.svg" alt="Linux" class="w-24 sm:w-32 md:w-40 lg:w-48">
        </div>

        <ol class="mt-6 max-w-2xl mx-auto space-y-3 text-left text-sm sm:text-base">
            <li>✅ Download YouTube videos free with our leading YouTube downloader.</li>
            <li>✅ Choose from multiple formats: MP4, MP3, SQ, HD, and Full HD.</li>
            <li>✅ Works seamlessly on desktop and mobile.</li>
            <li>✅ Fast downloads and unlimited access to YouTube videos.</li>
            <li>✅ Learn advanced video downloading tips in our detailed guide.</li>
        </ol>
    </section>

    <!-- Step-by-Step Guide Section -->
    <section class="py-12 bg-white text-black px-4 md:px-16">
        <div class="text-center lg:mb-8">
            <h2 class="text-2xl md:text-3xl font-bold">Easily Download YouTube Videos: A Step-by-Step Guide</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-4">
            <div class="text-center">
                <img src="./img/howto2.png" alt="Step 1" class="mx-auto mb-4 w-full max-w-[200px]">
                <p>Follow these simple steps to download YouTube videos for offline viewing.</p>
            </div>
            <div class="text-center">
                <img src="./img/howto3.png" alt="Step 2" class="mx-auto mb-4 w-full max-w-[200px]">
                <p>Locate your video on YouTube and copy the link from your browser's address bar.</p>
            </div>
            <div class="text-center">
                <img src="./img/howto4.png" alt="Step 3" class="mx-auto mb-4 w-full max-w-[200px]">
                <p>Paste the YouTube link into the provided box on our website.</p>
            </div>
        </div>
    </section>

    <!-- Download Without Add-on Section -->
    <section class="bg-white text-black px-4 sm:px-8 lg:px-16 mb-10">
        <div class="space-y-3 text-left sm:ml-12 lg:ml-24">
            <h2 class="text-2xl sm:text-3xl font-bold mb-4">How to Download YouTube Videos Without an Add-on</h2>
            <p>Learn how to download a YouTube video without a video downloader add-on! Simply add 'ss' to the video URL to
                quickly
                save the video to your device.</p>
            <p class="mt-4">Example:</p>
            <ul class="space-y-3">
                <li>1. Original URL: https://youtube.com/watch?v=YOCm5sBfaFg</li>
                <li>2. Modified URL with "ss" : https://ssyoutube.com/watch?v=YOCm5sBfaFg</li>
            </ul>
        </div>
    </section>

    <!-- Download Videos From Other Websites -->
    <section class="bg-[#3b0077] text-white p-8 sm:p-16 mt-0">
        <div class="space-y-3 text-left sm:ml-24 mx-4">
            <h2 class="text-2xl sm:text-3xl font-bold mb-4">Download Videos From Other Websites</h2>
            <p class="text-sm sm:text-base">
                Want to download YouTube shorts from sites other than YouTube? The SSYouTube downloader supports video
                downloads from
                99% of websites! Just add "sfrom.net/" or "savefrom.net/" before the website URL and press Enter.
            </p>
            <p class="mt-4 text-sm sm:text-base">For example: sfrom.net/http://www.freethechildren.com/</p>
        </div>
    </section>

    <!-- Using SSYouTube's Short Domain to Download Videos -->
    <section class="py-12 bg-white text-black px-6 sm:px-16">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-semibold">Using SSYouTube's Short Domain to Download Videos</h2>
        </div>
        <div class="flex flex-col sm:flex-row space-y-8 sm:space-y-0 sm:space-x-8">
            <div class="text-center">
                <h2 class="mb-6">Find Your Video</h2>
                <img src="./img/y1.svg" alt="Step 1" class="mx-auto mb-4">
                <p>First, find the YouTube video you want to download and copy its URL from the address bar.</p>
            </div>
            <div class="text-center">
                <h2 class="mb-6">Modify the URL</h2>
                <img src="./img/y2.svg" alt="Step 2" class="mx-auto mb-4">
                <p>Modify the URL by adding "ss" before "youtube" (e.g., sshttps://youtube.com/...).</p>
            </div>
            <div class="text-center">
                <h2 class="mb-6">Download Your Video</h2>
                <img src="./img/y3.svg" alt="Step 3" class="mx-auto mb-4">
                <p>Once the URL is modified, hit enter to access the download page and choose your video quality to
                    download.</p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bg-white">
        <div class="text-center">
            <h2 class="text-2xl font-bold text-black sm:text-3xl">FAQ</h2>
        </div>
        <div class="space-y-4 pb-12 px-4 sm:px-16">
            <div class="faq-item bg-white p-4 rounded">
                <h3 class="faq-question font-bold cursor-pointer text-lg sm:text-xl">What is SSYouTube and What Does It Do?
                </h3>
                <p class="faq-answer hidden mt-2 text-sm sm:text-base">SSYouTube is a free online YouTube video downloader
                    that allows you to download videos in multiple formats and resolutions. Enjoy fast downloads,
                    high-quality video and audio, and convenient offline viewing.</p>
            </div>
            <div class="faq-item bg-[#3b0077] text-white p-4 rounded">
                <h3 class="faq-question font-bold cursor-pointer text-lg sm:text-xl">How Do I Download YouTube Videos with
                    SSYouTube?</h3>
                <p class="faq-answer hidden mt-2 text-sm sm:text-base">You can download YouTube videos by pasting the link
                    in the input box and clicking on the download button. Follow the instructions for more details.</p>
            </div>
            <div class="faq-item bg-[#3b0077] text-white p-4 rounded">
                <h3 class="faq-question font-bold cursor-pointer text-lg sm:text-xl">Which Video Formats Does SSYouTube
                    Support?</h3>
                <p class="faq-answer hidden mt-2 text-sm sm:text-base">SSYouTube supports formats like MP4, MP3, SQ, HD, and
                    Full HD, ensuring compatibility with most devices.</p>
            </div>
            <div class="faq-item bg-[#3b0077] text-white p-4 rounded">
                <h3 class="faq-question font-bold cursor-pointer text-lg sm:text-xl">Can I Download YouTube Playlists and
                    Channels with SSYouTube?</h3>
                <p class="faq-answer hidden mt-2 text-sm sm:text-base">Yes, SSYouTube allows downloading of entire playlists
                    and channels. Just provide the playlist or channel URL to get started.</p>
            </div>
            <div class="faq-item bg-[#3b0077] p-4 text-white rounded">
                <h3 class="faq-question font-bold cursor-pointer text-lg sm:text-xl">Is SSYouTube Safe?</h3>
                <p class="faq-answer hidden mt-2 text-sm sm:text-base">Yes, SSYouTube is safe to use. It ensures a secure
                    environment for downloading videos without any malware or risks.</p>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="text-center py-6 bg-black text-white">
        <p>&copy; 2025 YouTube Downloader, made with <span class="text-red-500">&hearts;</span> by <a href="https://sharifrony725.github.io/" class="text-green-400">Dev Sharif</a>.</p>
        <div class="mt-2">
            <a href="#" class="text-blue-400 hover:underline mx-2">Privacy Policy</a>
            <a href="#" class="text-blue-400 hover:underline mx-2">Terms of Service</a>
            <a href="#" class="text-blue-400 hover:underline mx-2">Contact</a>
            <a href="#" class="text-blue-400 hover:underline mx-2">API</a>
        </div>
    </footer>

    <!-- <script>
    function fetchVideo() {
        const url = document.getElementById('videoUrl').value;
        if (url) {
            document.getElementById('videoDetails').classList.remove('hidden');
            document.getElementById('thumbnail').src = './img/demo_thumbnail.jpg';
            document.getElementById('videoTitle').innerText = 'Sample Video Title';
            document.getElementById('videoDuration').innerText = 'Duration: 9:57';

            const formats = [
                { quality: '720p', format: 'mp4' },
                { quality: '360p', format: 'mp4' },
                { quality: '1080p', format: 'mp4' },
                { quality: '1080p', format: 'webm' }
            ];

            let options = '';
            formats.forEach(f => {
                options += `<div class='flex justify-between items-center p-2 bg-[#2d0059] rounded-md mt-2'>
                                    <span>${f.quality}.${f.format}</span>
                                    <button class='bg-red-500 px-4 py-1 rounded hover:bg-red-600'>Download</button>
                                </div>`;
            });
            document.getElementById('downloadOptions').innerHTML = options;
        }
    }
</script> -->
    <script src="app.js"></script>
</body>

</html>