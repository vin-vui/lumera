<x-app-layout>
    <div class="pb-24">
        <header class="">
            <div class="mx-auto py-4 px-4 sm:px-6 lg:px-12">
                <div class="flex items-center justify-between h-6 border-l-2">
                    <h2 class="font-semibold text-xl text-white leading-tight ml-4">
                        Tableau de bord
                    </h2>
                </div>
            </div>
        </header>
        <div class="mx-auto sm:px-6 lg:px-12 mt-4">
            <div class="overflow-hidden grid grid-cols-4 gap-4">
                <div class="relative overflow-hidden bg-white px-4 pt-5 pb-12 sm:px-6 sm:pt-6 w-full">
                    <dt>
                        <div class="absolute bg-indigo-400 p-3">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                        </div>
                        <p class="ml-16 truncate text-sm font-medium text-gray-500">Créateurs <span class="text-orange-300">actifs</span></p>
                    </dt>
                    <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                        <p class="text-2xl font-semibold text-gray-900">{{ App\Models\Creator::where('display', true)->count() }}</p>
                        <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                            <div class="text-sm">
                                <a href="{{ route('creators') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Voir tous</a>
                            </div>
                        </div>
                    </dd>
                </div>
                <div class="relative overflow-hidden bg-white px-4 pt-5 pb-12 sm:px-6 sm:pt-6 w-full">
                    <dt>
                        <div class="absolute bg-indigo-400 p-3">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 36 36">
                                <path fill="currentColor" d="M30 18a4.06 4.06 0 0 0 4-4V6H24V4.43A2.44 2.44 0 0 0 21.55 2h-7.1A2.44 2.44 0 0 0 12 4.43V6H2v8a4.06 4.06 0 0 0 4.05 4h4v-2.08h2v5.7a1 1 0 1 1-2 0v-1.56H6.06A6.06 6.06 0 0 1 2 18.49v9.45a2 2 0 0 0 2 2h28a2 2 0 0 0 2-2v-9.45a6 6 0 0 1-4.06 1.57H28V18ZM14 4.43a.45.45 0 0 1 .45-.43h7.1a.45.45 0 0 1 .45.43V6h-8Zm12 17.19a1 1 0 1 1-2 0v-1.56H14V18h10v-2.08h2Z" class="clr-i-solid clr-i-solid-path-1" />
                                <path fill="none" d="M0 0h36v36H0z" />
                            </svg>
                        </div>
                        <p class="ml-16 truncate text-sm font-medium text-gray-500">Études de cas <span class="text-orange-300">publiées</span></p>
                    </dt>
                    <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                        <p class="text-2xl font-semibold text-gray-900">{{ App\Models\CaseStudy::where('display', true)->count() }}</p>
                        <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                            <div class="text-sm">
                                <a href="{{ route('cases') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Voir toutes</a>
                            </div>
                        </div>
                    </dd>
                </div>
                <div class="relative overflow-hidden bg-white px-4 pt-5 pb-12 sm:px-6 sm:pt-6 w-full">
                    <dt>
                        <div class="absolute bg-indigo-400 p-3">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" width="40" height="32" viewBox="0 0 640 512">
                                <path fill="currentColor" d="M345.6 108.8c-8.3-11-22.7-15.5-35.7-11.2S288 114.2 288 128v256c0 17.7 14.3 32 32 32s32-14.3 32-32V224l86.4 115.2c6 8.1 15.5 12.8 25.6 12.8s19.6-4.7 25.6-12.8L576 224v160c0 17.7 14.3 32 32 32s32-14.3 32-32V128c0-13.8-8.8-26-21.9-30.4s-27.5.1-35.7 11.2L464 266.7L345.6 108.8zM0 128c0 17.7 14.3 32 32 32h64v224c0 17.7 14.3 32 32 32s32-14.3 32-32V160h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H32c-17.7 0-32 14.3-32 32z" />
                            </svg>
                        </div>
                        <p class="ml-16 truncate text-sm font-medium text-gray-500">Marques <span class="text-orange-300">partenaires</span></p>
                    </dt>
                    <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                        <p class="text-2xl font-semibold text-gray-900">{{ App\Models\Mark::all()->count() }}</p>
                        <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                            <div class="text-sm">
                                <a href="{{ route('marks') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Voir toutes</a>
                            </div>
                        </div>
                    </dd>
                </div>
                <div class="relative overflow-hidden bg-white px-4 pt-5 pb-12 sm:px-6 sm:pt-6 w-full">
                    <dt>
                        <div class="absolute bg-indigo-400 p-3">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 20 20">
                                <path fill="currentColor" d="M4 3h12c.55 0 1.02.2 1.41.59S18 4.45 18 5v7c0 .55-.2 1.02-.59 1.41S16.55 14 16 14h-1l-5 5v-5H4c-.55 0-1.02-.2-1.41-.59S2 12.55 2 12V5c0-.55.2-1.02.59-1.41S3.45 3 4 3zm11 2H4v1h11V5zm1 3H4v1h12V8zm-3 3H4v1h9v-1z" />
                            </svg>
                        </div>
                        <p class="ml-16 truncate text-sm font-medium text-gray-500">Témoignages <span class="text-orange-300">partagés</span></p>
                    </dt>
                    <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                        <p class="text-2xl font-semibold text-gray-900">{{ App\Models\Testimonial::all()->count() }}</p>
                        <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                            <div class="text-sm">
                                <a href="{{ route('testimonials') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Voir tous</a>
                            </div>
                        </div>
                    </dd>
                </div>
            </div>
        </div>
        <div class="mx-auto sm:px-6 lg:px-12 mt-4">
            <iframe plausible-embed src="https://plausible.io/share/lumera.social?auth=-TbWTpYHCXXZ0eH59paqs&embed=true&theme=light" scrolling="no" frameborder="0" loading="lazy" style="width: 1px; min-width: 100%; height: 1600px;"></iframe>
            <div style="font-size: 14px; padding-bottom: 14px;" class="">
                Stats powered by <a target="_blank" style="color: #4F46E5; text-decoration: underline;" href="https://plausible.io">Plausible Analytics</a>
            </div>
            <script async src="https://plausible.io/js/embed.host.js"></script>
        </div>
    </div>
</x-app-layout>
