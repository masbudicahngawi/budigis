<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nav Satu</title>

    <link rel="stylesheet" href="{{ asset('assets/mystyles.css') }}">
    <style>
        .close-menu,
        .open-menu {
            position: absolute;
            cursor: pointer;
            display: none;
        }

        .open-menu {
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        .close-menu {
            top: 20px;
            right: 20px;
        }

        #check {
            display: none;
        }

        @media (max-width: 800px) {
            .menu {
                flex-direction: column;
                align-items: left;
                justify-content: center;
                width: 50%;
                height: 100vh;
                position: fixed;
                top: 0;
                right: -100%;
                z-index: 100;
                background-color: #000;
                color: #fff;
                transition: all 0.5s ease-in-out;
                text-transform: uppercase;
                font-size: 24px;
            }

            .menu li {
                margin-top: 10px;
            }

            .menu li a {
                padding: 10px;
            }

            .close-menu,
            .open-menu {
                display: block;
            }

            #check:checked~.menu {
                right: 0;
            }
        }
    </style>

</head>

<body>
    <header>
        <nav class="bg-white fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
            <ul class="navigation max-w-[90vw] flex flex-wrap justify-between items-center relative mx-auto py-8">
                <a class="logo" href="#">
                    <h3 class="font-bold text-2xl">BudiGIS</h3>
                </a>
                <input type="checkbox" id="check" />

                <span
                    class="menu flex [&>li]:pl-8 [&>li>a]:text-center [&>li>a]:relative [&>li>a]:transition [&>li>a]:duration-200 [&>li>a]:ease-in-out [&>li>a]:font-medium [&>li>a]:text-lg">
                    <li class="text-yellow-500 text-2xl nama">Mas Budi</li>
                    <li><a href="#">PoI</a></li>
                    <li><a href="#">Tambah</a></li>
                    <li><a href="#">Edit</a></li>
                    <li><a href="#">Multi Layer</a></li>
                    <li><a href="/logout" class="text-2xl text-red-500" >Logout</a></li>

                    <label for="check" class="close-menu">X</label>
                </span>

                <label for="check" class="open-menu">Menu</label>
            </ul>
        </nav>
    </header>
</body>

</html>
