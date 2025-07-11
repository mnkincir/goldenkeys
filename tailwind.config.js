/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                copperplate: ["Copperplate", "Copperplate Gothic Light", "sans-serif"],
                lato: ["Lato", "sans-serif"],
                sans: ['Poppins', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'sans-serif'],
            },
            colors: {
                ivory: "#f5f5f5",
                gold: "#d4af37",
                gkBlack: "#0D0D0D",
            },
            animation: {
                // Fade-in ve scale animasyonlarını birleştiriyoruz
                fadeInScale: "fadeInScale 1s linear forwards", // 3 saniye sürecek
            },
            keyframes: {
                fadeInScale: {
                "0%": { opacity: 0, transform: "scale(3)" }, // Başlangıçta opaklık yok ve metin çok büyük
                "50%": { opacity: 1, transform: "scale(2.35)" }, // Yavaşça opaklık artıyor ve metin küçülüyor
                "100%": { opacity: 1, transform: "scale(1.7)" }, // Sonunda metin normal boyutuna gelir
                },
            },
        },
    },
    plugins: [
        require('daisyui'),
    ],
    daisyui: {
        themes: [
        {
            light: {
            ...require("daisyui/src/theming/themes")["corporate"],
            primary: "#F2CD5C",
            },
        },
        "cupcake",
        ], // Temalar: light, dark, vs.
    },
}