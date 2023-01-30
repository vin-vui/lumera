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

        <div class="mx-auto sm:px-6 lg:px-12">
            <div class="overflow-hidden flex flex-col sm:flex-row flex-wrap items-center sm:my-12 my-6 p-0 gap-4">

                    <div class="relative overflow-hidden bg-white px-4 pt-5 pb-12 sm:px-6 sm:pt-6 w-1/4">
                        <dt>
                            <div class="absolute bg-indigo-400 p-3">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>
                            </div>
                            <p class="ml-16 truncate text-sm font-medium text-gray-500">Créateurs</p>
                        </dt>
                        <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                            <p class="text-2xl font-semibold text-gray-900">{{ App\Models\Creator::all()->count() }}</p>
                            <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                                <div class="text-sm">
                                    <a href="{{ route('creators') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Voir tous</a>
                                </div>
                            </div>
                        </dd>
                    </div>

                    <div class="relative overflow-hidden bg-white px-4 pt-5 pb-12 sm:px-6 sm:pt-6 w-1/4">
                        <dt>
                            <div class="absolute bg-indigo-400 p-3">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
                                </svg>
                            </div>
                            <p class="ml-16 truncate text-sm font-medium text-gray-500">Études de cas</p>
                        </dt>
                        <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                            <p class="text-2xl font-semibold text-gray-900">{{ App\Models\CaseStudy::all()->count() }}</p>
                            <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                                <div class="text-sm">
                                    <a href="{{ route('cases') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Voir toutes</a>
                                </div>
                            </div>
                        </dd>
                    </div>

            </div>
        </div>
    </div>
</x-app-layout>
