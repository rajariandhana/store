<footer class="bg-white">
    @php
        $productLinks = [
            ['name' => 'Top', 'link' => '/top'],
            ['name' => 'Bot', 'link' => '/bot'],
            ['name' => 'Footwear', 'link' => '/footwear'],
            ['name' => 'Other', 'link' => '/other'],
        ];
        $companyLinks = [
            ['name' => 'About', 'link' => '/about'],
            ['name' => 'Terms & Condition', 'link' => '/terms_and_condition'],
            ['name' => 'Privacy Policy', 'link' => '/privacy_and_policy'],
        ];
    @endphp
    <div class="w-full max-w-screen-xl p-4 py-6 mx-auto lg:py-8">
        <hr class="my-3 border-gray-400 sm:mx-auto lg:my-4" />
        <div class="flex flex-col justify-between lg:flex-row">
            <div class="justify-between mb-4">
                <div>
                    <span class="text-gray-500 text-md ">© 2024
                        <a href="https://store.test" class="text-gray-900 no-underline hover:underline">CompanyName</a>.
                        All Rights Reserved.
                    </span>
                    <div class="flex flex-row mt-4">
                        <a href="#" class="text-gray-500 hover:text-gray-900 ms-5">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                              </svg>

                            <span class="sr-only">Instagram</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 ms-5">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z"/>
                              </svg>

                            <span class="sr-only">Twitter</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 ms-5">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                              </svg>

                            <span class="sr-only">Facebook</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4 md:flex-row">
                <x-footer-links :name="'Products'" :links="$productLinks">
                </x-footer-links>
                <x-footer-links :name="'Company'" :links="$companyLinks">
                </x-footer-links>
            </div>
        </div>

        <hr class="my-6 border-gray-400 sm:mx-auto lg:my-8" />

    </div>
</footer>
