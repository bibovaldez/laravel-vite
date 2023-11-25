/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./dist/*.{html,js}",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            brown: {
                light: "#FFFFFF",
                DEFAULT: "#5c6ac4",
                dark: "#FBF4E4",
            },
            green: {
                dark: "#1BC037",
                DEFAULT: "#1BC037",
                light: "#87D75B",
            },
            white: {
                DEFAULT: "#FFFFFF",
                light: "#F7F8F7",
            },
            blue: {
                light: "#26A2D9",
                dark: "#C1D2F6",
            },
            black: {
                light: "#2D2006",
            },
        },
        fontFamily: {
            glacial: ["Glacial Indifference", "sans-serif"],
            boldglacial: ["Glacial Indifference Bold", "sans-serif"],
            league: ["League Spartan", "sans-serif"],
            openSans: ["Open Sans", "sans-serif"],
        },
        borderWidth: {
            DEFAULT: "1px",
            0: "0",
            2: "2px",
            3: "3px",
        },
        // create template for responsive font sizes
        fontSize: {
            xs: ".75rem",
            sm: ".875rem",
            tiny: ".875rem",
            base: "1rem",
            lg: "1.125rem",
            xl: "1.25rem",
            "2xl": "1.5rem",
            "3xl": "2.0rem",
            "4xl": "2.5rem",
            "5xl": "3.0rem",
            "6xl": "3.9rem",
            "7xl": "5.5rem",
            "8xl": "6.0rem",
            "9xl": "7.0rem",
            "10xl": "8.0rem",
        },
        // create template for font weights include font-thin, font-extrabold, etc.
        fontWeight: {
            thin: 100,
            extralight: 200,
            light: 300,
            normal: 400,
            medium: 500,
            bold: 790,
            extrabold: 800,
            black: 900,
        },
        stroke: {
            current: "#1BC037",
        },
        // create a template for up down animation
        extend: {
            keyframes: {
                updown: {
                    "0%, 100%": { transform: "translateY(0)" },
                    "50%": { transform: "translateY(-30%)" },
                },
            },
            animation: {
                updown: "updown 4s ease-in-out infinite",
            },
        },
        // create a template for opacity
        opacity: {
            0: "0",
            10: ".1",
            20: ".2",
            30: ".3",
            40: ".4",
            50: ".5",
            60: ".6",
            70: ".84",
            80: ".8",
            90: ".9",
            100: "1",
        },
    },
    plugins: [],
    variants: {
        extend: {},
    },
};
