<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .container {
                @apply px-10 mx-auto
            }
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container">

        <div class="flex justify-between my-5">
            <h1 class="text-red-500">Create</h1>
<a href="/" class="bg-green-600 text-white rounded py-2 px-4">
Back to home
</a>
        </div>

        <div>
            <form method="POST" action="{{route('store')}}">
                @csrf
                <div class="flex flex-col gap-5">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="" placeholder="Name" class="border p-2 rounded w-full">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="" placeholder="Description" class="border p-2 rounded w-full">
                    <input type="file" name="image" id="" class="border p-2 rounded w-full">
                    <div>

                        <input type="submit" class="bg-green-500 text-white rounded py-2 px-4 cursor-pointer" value="Submit">
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</body>

</html>
