import preset from "./vendor/filament/support/tailwind.config.preset";

export default {
    presets: [preset],
    content: [
        "./app/Filament/**/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                "bip-blue": {
                    50: "#f1f6ff",
                    100: "#e5edff",
                    200: "#cfe1ff",
                    300: "#a8c3ff",
                    400: "#789eff",
                    500: "#416bff",
                    600: "#1b41ff",
                    700: "#0931f8",
                    800: "#0729d0",
                    900: "#0823aa",
                    950: "#011563",
                },
                "bip-orange": {
                    50: "#fff4ed",
                    100: "#ffe5d4",
                    200: "#ffc7a8",
                    300: "#ffa071",
                    400: "#ff7542",
                    500: "#fe4711",
                    600: "#ef2d07",
                    700: "#c61d08",
                    800: "#9d190f",
                    900: "#7e1810",
                    950: "#440806",
                },
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
