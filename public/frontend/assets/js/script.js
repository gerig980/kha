const colorRange = document.getElementById('colorRange');
const colorPreview = document.getElementById('colorPreview');
const content = document.querySelector('.content');

colorRange.addEventListener('input', () => {
    const hue = colorRange.value;
    const selectedColor = `hsl(${hue}, 100%, 50%)`;
    
    colorPreview.style.backgroundColor = selectedColor;
    content.style.color = getContrastColor(selectedColor);
});

function getContrastColor(hslColor) {
    // Use some logic to determine the text color for contrast (black or white).
    const [, saturation, lightness] = hslColor.match(/\d+/g);
    return lightness > 50 ? 'black' : 'white';
}
