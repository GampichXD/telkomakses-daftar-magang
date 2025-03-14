import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    // Daftar file yang digunakan untuk memindai class Tailwind CSS
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php', // Pagination Laravel
        './storage/framework/views/*.php', // File view cache Laravel
        './resources/views/**/*.blade.php', // Semua file Blade di direktori resources/views
        './resources/js/**/*.js', // Semua file JavaScript di direktori resources/js

    ],

    // Aktifkan dark mode berdasarkan class (bukan preferensi sistem)
    darkMode: 'class',

    theme: {
        // Konfigurasi breakpoint responsif
        screens: {
            sm: '540px', // Small devices (min-width: 540px)
            md: '720px', // Medium devices (min-width: 720px)
            lg: '960px', // Large devices (min-width: 960px)
            xl: '1140px', // Extra large devices (min-width: 1140px)
            '2xl': '1320px', // 2x large devices (min-width: 1320px)
        },

        // Konfigurasi container
        container: {
            center: true, // Pusatkan container
            padding: '16px', // Tambahkan padding ke container
        },

        // Perluas tema default Tailwind CSS
        extend: {
            // Tambahkan font custom ke default sans-serif
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans], // Gunakan font Figtree + fallback default
            },

            // Tambahkan warna kustom
            colors: {
                black: '#212b36', // Warna hitam kustom
                'dark-700': '#090e34b3', // Warna gelap transparan
                dark: {
                    DEFAULT: '#111928', // Default dark mode
                    2: '#1F2A37', // Variasi dark mode
                    3: '#374151',
                    4: '#4B5563',
                    5: '#6B7280',
                    6: '#9CA3AF',
                    7: '#D1D5DB',
                    8: '#E5E7EB',
                },
                primary: '#E21A25', // Warna utama (merah)
                'blue-dark': '#111928',//'#1B44C8', // Warna biru gelap -->ku ganti jadi hitam karena gak nemu id buat button lamar sekarang
                secondary: '#13C296', // Warna sekunder (hijau)
                'body-color': '#637381', // Warna teks body
                'body-secondary': '#8899A8', // Warna teks body sekunder
                warning: '#FBBF24', // Warna peringatan (kuning)
                stroke: '#DFE4EA', // Warna stroke/border
                'gray-1': '#F9FAFB', // Warna abu-abu terang
                'gray-2': '#F3F4F6',
                'gray-7': '#CED4DA',
                'red-primary': '#E21A25', // Variasi warna merah
            },

            // Tambahkan shadow kustom
            boxShadow: {
                input: '0px 7px 20px rgba(0, 0, 0, 0.03)', // Shadow untuk input
                form: '0px 1px 55px -11px rgba(0, 0, 0, 0.01)', // Shadow untuk form
                pricing: '0px 0px 40px 0px rgba(0, 0, 0, 0.08)', // Shadow untuk pricing box
                'switch-1': '0px 0px 5px rgba(0, 0, 0, 0.15)', // Shadow untuk switch
                testimonial: '0px 10px 20px 0px rgba(92, 115, 160, 0.07)', // Shadow untuk testimonial
                'testimonial-btn': '0px 8px 15px 0px rgba(72, 72, 138, 0.08)', // Shadow untuk tombol testimonial
                1: '0px 1px 3px 0px rgba(166, 175, 195, 0.40)', // Shadow level 1
                2: '0px 5px 12px 0px rgba(0, 0, 0, 0.10)', // Shadow level 2
            },
        },
    },
    variants: {
        extend: {},
      },
    // Plugin tambahan
    plugins: [], // Gunakan plugin @tailwindcss/forms untuk styling form
};