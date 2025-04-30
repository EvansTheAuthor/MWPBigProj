document.querySelector('.copyright p').innerHTML ='&copy; ${new Date().getFullYear()} KonsulDokter. All rights reserved.';
document.querySelector('.footer-section h3').addEventListener('click', () => {
    document.querySelector('.footer-section p').classList.toggle('active');
})