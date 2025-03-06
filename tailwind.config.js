import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                quicksand: ["Quicksand", "sans-serif"],
            },
            colors: {
                primary: {
                    DEFAULT: "#edb21a",
                    50: "#fdf9e9",
                    100: "#fbf2c6",
                    200: "#f8e390",
                    300: "#f3cc51",
                    400: "#edb21a",
                    500: "#de9d14",
                    600: "#bf780f",
                    700: "#99550f",
                    800: "#7f4514",
                    900: "#6c3817",
                    950: "#3f1c09",
                },
                secondary: {
                    DEFAULT: "#888179",
                    50: "#f4f3f2",
                    100: "#e2e1df",
                    200: "#c8c5c0",
                    300: "#a8a39c",
                    400: "#888179",
                    500: "#807972",
                    600: "#6d6661",
                    700: "#59524f",
                    800: "#4d4846",
                    900: "#44403f",
                    950: "#262322",
                },
                accent: {
                    DEFAULT: "#b3bff6",
                    50: "#eff3fe",
                    100: "#e2e8fd",
                    200: "#cbd5fa",
                    300: "#b3bff6",
                    400: "#8a95ef",
                    500: "#6e72e6",
                    600: "#5953d8",
                    700: "#4c43bf",
                    800: "#3e399a",
                    900: "#37357a",
                    950: "#211f47",
                },
                blue: {
                    50: "#eff3ff",
                    100: "#dbe4fe",
                    200: "#bfcffe",
                    300: "#93aefd",
                    400: "#6088fa",
                    500: "#3b6bf6",
                    600: "#2558eb",
                    700: "#1d4dd8",
                    800: "#1e44af",
                    900: "#1e3a8a",
                    950: "#172754",
                },
            },
        },
    },

    plugins: [
        forms,
        require("flowbite/plugin"),
        //     require("@tailwindcss/aspect-ratio"),
        // require("@tailwindcss/forms"),
        // require("@tailwindcss/typography"),
        // require("daisyui"),
    ],
};
