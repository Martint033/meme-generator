let topTextInput, bottomTextInput, topTextSizeInput, bottomTextSizeInput, imageInput, generateBtn, canvas, ctx;

function generateMeme (img, topText, bottomText, topTextSize, bottomTextSize, color, font) {
    let fontSize;
    if (font == "default"){
        font = "Arial";
    }
    
    if (color == "default"){
        color = 'white';
    }

    // Size canvas to image
    canvas.width = img.width;
    canvas.height = img.height;
    

    // // Clear canvas
    // ctx.clearRect(0, 0, canvas.width, canvas.height);
    // // Draw main image
    ctx.drawImage(img, 0, 0);

    // Text style: white with black borders
    ctx.fillStyle = color;
    ctx.strokeStyle = 'black';
    ctx.textAlign = 'center';

    // Top text font size
    fontSize = canvas.width * topTextSize/2;
    ctx.font = fontSize + 'px ' + font;
    ctx.lineWidth = fontSize / 20;

    // Draw top text
    ctx.textBaseline = 'top';
    topText.split('\n').forEach(function (t, i) {
        ctx.fillText(t, canvas.width / 2, i * fontSize, canvas.width);
        ctx.strokeText(t, canvas.width / 2, i * fontSize, canvas.width);
    });

    // Bottom text font size
    fontSize = canvas.width * bottomTextSize/2;
    ctx.font = fontSize + 'px ' + font;
    ctx.lineWidth = fontSize / 20;

    // Draw bottom text
    ctx.textBaseline = 'bottom';
    bottomText.split('\n').reverse().forEach(function (t, i) { // .reverse() because it's drawing the bottom text from the bottom up
        ctx.fillText(t, canvas.width / 2, canvas.height - i * fontSize, canvas.width);
        ctx.strokeText(t, canvas.width / 2, canvas.height - i * fontSize, canvas.width);
    });
}

function init () {
    // Initialize variables
    topTextInput = document.getElementById('top-text');
    bottomTextInput = document.getElementById('bottom-text');
    topTextSizeInput = document.getElementById('top-text-size-input');
    bottomTextSizeInput = document.getElementById('bottom-text-size-input');
    imageInput = document.getElementById('image-input');
    generateBtn = document.getElementById('generate-btn');
    canvas = document.getElementById('meme-canvas');
    color = document.getElementById("txtColor");
    font = document.getElementById("fontStyle");
    updateChange = document.getElementsByClassName("updateChange");

    var img = new Image();
    img.src = imageInput.src;
    // img.width = imageInput.width;
    // img.height = imageInput.height;
    ctx = canvas.getContext('2d');

    canvas.width = canvas.height = 0;

    // Default/Demo text
    topTextInput.value = bottomTextInput.value = 'Demo\nText';

    img.onload = function () {
        generateMeme(img, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value, color.value, font.value);   
    };

    for(var i = 0; i < updateChange.length; i++) {
        updateChange[i].addEventListener('change', function() {
            generateMeme(img, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value, color.value, font.value);   
        });
    }

    color.addEventListener('change', function () {
        generateMeme(img, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value, color.value, font.value);   
    });

    topTextInput.addEventListener('input', function () {
        generateMeme(img, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value, color.value, font.value);   
    });

    bottomTextInput.addEventListener('input', function () {
        generateMeme(img, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value, color.value, font.value);
    });
}

init();

function doCanvas() {
    /* draw something */
    ctx.fillStyle = '#f90';
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    ctx.fillStyle = '#fff';
    ctx.font = '60px sans-serif';
    ctx.fillText('Code Project', 10, canvas.height / 2 - 15);
    ctx.font = '26px sans-serif';
    ctx.fillText('Click link below to save this as image', 15, canvas.height / 2 + 35);
}

/**
 * This is the function that will take care of image extracting and
 * setting proper filename for the download.
 * IMPORTANT: Call it from within a onclick event.
*/
function downloadCanvas(link, canvasId, filename) {
    link.href = document.getElementById(canvasId).toDataURL();
    link.download = filename;
}

/** 
 * The event handler for the link's onclick event. We give THIS as a
 * parameter (=the link element), ID of the canvas and a filename.
*/
document.getElementById('download').addEventListener('click', function() {
    downloadCanvas(this, 'meme-canvas', 'test.jpg');
}, false);

/**
 * Draw something to canvas
 */
doCanvas();

