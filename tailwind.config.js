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
                    DEFAULT: "#14243d",
                    50: "#f3f6fc",
                    100: "#e5edf9",
                    200: "#c6d9f1",
                    300: "#94b9e5",
                    400: "#5b95d5",
                    500: "#3677c1",
                    600: "#265ea3",
                    700: "#204b84",
                    800: "#1e406e",
                    900: "#1e385d",
                    950: "#14243d",
                },
                secondary: {
                    DEFAULT: "#cb4137",
                    50: "#fdf4f3",
                    100: "#fbe6e5",
                    200: "#f9d2cf",
                    300: "#f4b2ad",
                    400: "#eb857e",
                    500: "#df5d54",
                    600: "#cb4137",
                    700: "#aa342b",
                    800: "#8d2e27",
                    900: "#762b26",
                    950: "#3f1310",
                },
                accent: {
                    DEFAULT: "#6d8297",
                    50: "#f5f8f9",
                    100: "#e9edf0",
                    200: "#d8e0e5",
                    300: "#bdcbd3",
                    400: "#9db1bd",
                    500: "#869bab",
                    600: "#6d8297",
                    700: "#68798d",
                    800: "#586475",
                    900: "#49535f",
                    950: "#2f343c",
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
            animation: {
                shake: "shake 1s cubic-bezier(.36,.07,.19,.97)  infinite",
                wiggle: "wiggle 0.5s ease-in-out  both infinite",
            },
            keyframes: {
                shake: {
                    "10%, 90%": {
                        transform: "translate3d(-1px, 0, 0)",
                    },
                    "20%, 80%": {
                        transform: "translate3d(2px, 0, 0)",
                    },
                    "30%, 50%, 70%": {
                        transform: "translate3d(-2px, 0, 0)",
                    },
                    "40%, 60%": {
                        transform: "translate3d(2px, 0, 0)",
                    },
                },
            },
            keyframes: {
                wiggle: {
                    "0%, 100%": {
                        transform: "rotate(-3deg) translate3d(-1px, 0, 0)",
                    },
                    "50%": { transform: "rotate(3deg)" },
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
