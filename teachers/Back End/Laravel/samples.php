<!-- 1. -->
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="images/acme.png" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="show.html">Senior Laravel Developer</a>
            </h3>
            <div class="text-xl font-bold mb-4">Acme Corp</div>
            <ul class="flex">
                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                    <a href="#">Laravel</a>
                </li>
                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                    <a href="#">API</a>
                </li>
                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                    <a href="#">Backend</a>
                </li>
                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                    <a href="#">Vue</a>
                </li>
            </ul>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> Boston,
                MA
            </div>
        </div>
    </div>
</div>

<!-- 2. -->
<a href="index.html" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
    <div class="bg-gray-50 border border-gray-200 p-10 rounded">
        <div class="flex flex-col items-center justify-center text-center">
            <img class="w-48 mr-6 mb-6" src="images/acme.png" alt="" />

            <h3 class="text-2xl mb-2">Senior Laravel Developer</h3>
            <div class="text-xl font-bold mb-4">Acme Corp</div>
            <ul class="flex">
                <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                    <a href="#">Laravel</a>
                </li>
                <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                    <a href="#">API</a>
                </li>
                <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                    <a href="#">Backend</a>
                </li>
                <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                    <a href="#">Vue</a>
                </li>
            </ul>
            <div class="text-lg my-4">
                <i class="fa-solid fa-location-dot"></i> Daytona, FL
            </div>
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <h3 class="text-3xl font-bold mb-4">
                    Job Description
                </h3>
                <div class="text-lg space-y-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Eligendi non reprehenderit
                        facilis architecto autem quam
                        necessitatibus, odit quod, repellendus
                        voluptate cum. Necessitatibus a id tenetur.
                        Error numquam at modi quaerat.
                    </p>

                    <a href="mailto:test@test.com"
                        class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
                            class="fa-solid fa-envelope"></i>
                        Contact Employer</a>

                    <a href="https://test.com" target="_blank"
                        class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i
                            class="fa-solid fa-globe"></i> Visit
                        Website</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 3. -->
<div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Create a Gig
        </h2>
        <p class="mb-4">Post a gig to find a developer</p>
    </header>

    <form action="">
        <div class="mb-6">
            <label for="company" class="inline-block text-lg mb-2">Company Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company" />
        </div>

        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Job Title</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                placeholder="Example: Senior Laravel Developer" />
        </div>

        <div class="mb-6">
            <label for="location" class="inline-block text-lg mb-2">Job Location</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                placeholder="Example: Remote, Boston MA, etc" />
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" />
        </div>

        <div class="mb-6">
            <label for="website" class="inline-block text-lg mb-2">
                Website/Application URL
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website" />
        </div>

        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
                Tags (Comma Separated)
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                placeholder="Example: Laravel, Backend, Postgres, etc" />
        </div>

        <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">
                Company Logo
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
        </div>

        <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">
                Job Description
            </label>
            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                placeholder="Include tasks, requirements, salary, etc"></textarea>
        </div>

        <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Create Gig
            </button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
</div>

<!-- 4. -->
<div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Register
        </h2>
        <p class="mb-4">Create an account to post gigs</p>
    </header>

    <form action="">
        <div class="mb-6">
            <label for="name" class="inline-block text-lg mb-2">
                Name
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" />
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2">Email</label>
            <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" />
            <!-- Error Example -->
            <p class="text-red-500 text-xs mt-1">
                Please enter a valid email
            </p>
        </div>

        <div class="mb-6">
            <label for="password" class="inline-block text-lg mb-2">
                Password
            </label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" />
        </div>

        <div class="mb-6">
            <label for="password2" class="inline-block text-lg mb-2">
                Confirm Password
            </label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation" />
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Sign Up
            </button>
        </div>

        <div class="mt-8">
            <p>
                Already have an account?
                <a href="login.html" class="text-laravel">Login</a>
            </p>
        </div>
    </form>
</div>

<!-- 5. -->
<div class="bg-gray-50 border border-gray-200 p-10 rounded">
    <header>
        <h1 class="text-3xl text-center font-bold my-6 uppercase">
            Manage Jobs
        </h1>
    </header>

    <table class="w-full table-auto rounded-sm">
        <tbody>
            <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <a href="show.html">
                        Laravel Senior Developer
                    </a>
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <a href="edit.html" class="text-blue-400 px-6 py-2 rounded-xl"><i
                            class="fa-solid fa-pen-to-square"></i>
                        Edit</a>
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <form action="">
                        <button class="text-red-600">
                            <i class="fa-solid fa-trash-can"></i>
                            Delete
                        </button>
                    </form>
                </td>
            </tr>

            <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <a href="show.html">
                        Junior Developer Opening
                    </a>
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <a href="edit.html" class="text-blue-400 px-6 py-2 rounded-xl"><i
                            class="fa-solid fa-pen-to-square"></i>
                        Edit</a>
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <form action="">
                        <button class="text-red-600">
                            <i class="fa-solid fa-trash-can"></i>
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>