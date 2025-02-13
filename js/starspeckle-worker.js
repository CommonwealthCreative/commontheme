self.onmessage = function (e) {
    const { width, height, starCount } = e.data;

    const stars = [];
    for (let i = 0; i < starCount; i++) {
        stars.push({
            x: Math.random() * width,
            y: Math.random() * height,
            opacity: Math.random() * 0.2,
            speed: 0.0005 + Math.random() * 0.0015,
        });
    }

    self.postMessage({ stars });
};
