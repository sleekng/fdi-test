<section id="footer" class="footer text-white pt-20 pb-20 lg:pb-0  bg-footer overflow-hidden relative flex items-center  ">

    <div class=" relative container px-4 lg:mt-0  xl:px-24 mx-auto">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 ">
            <div class="col-span-1 space-y-4 lg:px-[64px]  border-b lg:border-0 py-4 lg:py-0">
                <img class=" w-60" src="/storage/img/logo.png" alt="">
                <p>Bridging the gap between economic development and site selection.</p>
            </div>
            <div class=" mt-10 lg:mt-0 flex space-y-4 flex-col lg:px-[64px]">
                <div>
                    <h3 class=" font-bold text-xl">Contact Us</h3>
                </div>
                <div class=" flex flex-col space-y-2">
                    <div>
                        <i class="fa-light fa-phone"></i>
                        <a href="tel:+44 208 242 4531">+44 208 242 4531</a>
                    </div>
                    <div>
                        <i class="fa-light fa-envelope"></i>
                        <a href="mailto:info@fdiallianceint.com">info@fdiallianceint.com</a>
                    </div>
                </div>
            </div>
            <div class=" flex space-y-2 flex-col mt-4 lg:mt-0">
                <div>
                    <h3 class=" font-bold text-xl">Subscribe to our Newsletter</h3>
                </div>


                <div class="relative">

                    <form action="{{route('newsletter.store')}}" method="POST" class="flex">
                        @csrf
                        <input type="text" name="email"
                            class=" w-full rounded-tl-md rounded-bl-md p-[10px] focus-visible:outline-none text-black border-none"
                            placeholder="Your Email Address">
                        <button type="submit"
                            class="bg-secondarycolor px-8 font-bold rounded-tr-md rounded-br-md">Submit</button>
                    </form>
               
                </div>
            </div>
        </div>

        <div class=" w-full flex pt-10 pb-10 lg:pb-4 justify-center items-center">
            <span class=" text-[12px] opacity-50 ">FDI Alliance International © 2023. All Rights Reserved.</span>
        </div>
    </div>
</section> 