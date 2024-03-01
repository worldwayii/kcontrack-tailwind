<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="{{asset('alert.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              black: {
                0: "#2E2828",
                10: "#4F4F4F",
              },
              brand: {
                0: "#092C86",
                10: "#D4DEF9",
                50: "#092C860D",
              },
              white: {
                0: "#FFFFFF",
                10: "#FFFFFF1A",
                20: "#FAFAFA",
              },
              gray: {
                0: "#E6E6E6",
                10: "#C4C4C4",
                20: "#828282",
                30: "#F5F5F5",
                40: "#E6E6E6",
                50: "#F2F2F2",
                60: "#80868C",
                70: "#EDEFF4",
                80: "#F3F5F7",
              },
              yellow: {
                0: "#FEFAF1",
              },
            },
            fontSize: {
              xs: "0.75rem",
              sm: "0.875rem",
              base: "1rem",
              lg: "1.125rem",
              xl: "1.25rem",
              "2xl": "1.5rem",
              "3xl": "1.75rem",
              "4xl": "2rem",
              "5xl": "2.25rem",
              "6xl": "2.5rem",
              "7xl": "2.75rem",
              "8xl": "3rem",
              "9xl": "3.25rem",
              "10xl": "10rem",
            },
          },
          fontFamily: {
            montserrat: ["Montserrat", "sans-serif"],
          },
        },
      };
    </script>
    <title>Kcontrack</title>
    <style>
      * {
        scrollbar-width: thin;
        scrollbar-color: #e3e3e3 transparent;
      }

      *::-webkit-scrollbar {
        width: 11px;
      }

      *::-webkit-scrollbar-track {
        background: transparent;
      }

      *::-webkit-scrollbar-thumb {
        background-color: #e3e3e3;
        border-radius: 6px;
        border: 3px solid transparent;
      }

      *::-webkit-scrollbar,
      *::-webkit-scrollbar-thumb {
        height: 26px;
        border-radius: 13px;
        background-clip: padding-box;
        border: 10px solid transparent;
      }

      *::-webkit-scrollbar-thumb {
        box-shadow: inset 0 0 0 10px;
      }

      .no-scrollbar::-webkit-scrollbar {
        display: none;
      }

      .no-scrollbar {
        -ms-overflow-style: none; /* IE and Edge */
        scrollbar-width: none; /* Firefox */
      }
    </style>
  </head>
@include('includes.nav')

