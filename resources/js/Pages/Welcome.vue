<template>
    <Head title="Welcome"/>

    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <img src="images/logo-alt.png" alt="" class="img-responsive center-block" style="width: 200px;" />
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">

                    <div class="p-6 border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <Link :href="route('login')" class="underline text-gray-900 dark:text-white">
                                    Log in
                                </Link>
                            </div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Free public chat rooms where you can chat online and make free discussion with people from all the world. Login to ask questions, make friends and discuss any topic.
                            </div>
                        </div>
                    </div>
                    <div class="p-6 border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <Link v-if="canRegister" :href="route('register')"
                                      class="underline text-gray-900 dark:text-white">
                                    Register
                                </Link>
                            </div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Here you can chat with strangers from all over the world. Simple and easy free registration.
                            </div>
                        </div>
                    </div>
                    <div class="p-6 border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">

                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://forum.4the.fun/"
                                                                                 class="underline text-gray-900 dark:text-white" target="_blank">Forum.4the.Fun</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Creating great forum posts helps to ensure quality discussion and better engagement. If you are a member of a community and you want it to be vibrant and a great place for others, the above rules will ensure it's a great experience for everyone.
                            </div>
                        </div>
                    </div>
                    <div class="p-6 border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">

                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://gallery.4the.fun/"
                                                                                 class="underline text-gray-900 dark:text-white" target="_blank">Gallery.4the.Fun</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Want to download photos instead of screenshotting them? Feel free to browse and discover all my shared images and albums.
                            </div>
                        </div>
                    </div>
                    <div class="p-6 border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">

                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://tube.4the.fun/"
                                                                                 class="underline text-gray-900 dark:text-white" target="_blank">Tube.4the.Fun</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Any article, news piece, or guide that's published in the blog section.
                            </div>
                        </div>
                    </div>
                    <div class="p-6 border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">

                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://file.4the.fun/"
                                                                                 class="underline text-gray-900 dark:text-white" target="_blank">File.4the.Fun</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                File sharing is making files available for other individuals to download. It can be as innocent as accessing work files from your home computer. Contact with admin for guest user password.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-6 border-gray-200 dark:border-gray-700">
                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Register on Private Chat Site and Talk to Admin :
                    <a href="https://chat.4the.fun" class="ml-1 underline">
                        https://chat.4the.fun
                    </a>
                    ( User Name: info 4thefun )
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .bg-gray-100 {
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
    }

    .border-gray-200 {
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--tw-border-opacity));
    }

    .text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }

    .text-gray-500 {
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--tw-text-opacity));
    }

    .text-gray-600 {
        color: #718096;
        color: rgba(113, 128, 150, var(--tw-text-opacity));
    }

    .text-gray-700 {
        color: #4a5568;
        color: rgba(74, 85, 104, var(--tw-text-opacity));
    }

    .text-gray-900 {
        color: #1a202c;
        color: rgba(26, 32, 44, var(--tw-text-opacity));
    }

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
        }

        .dark\:bg-gray-900 {
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
        }

        .dark\:border-gray-700 {
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }

        .dark\:text-white {
            color: #fff;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .dark\:text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
        }
    }
</style>

<script>
    import {defineComponent} from 'vue'
    import {Head, Link} from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Head,
            Link,
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    })

</script>



