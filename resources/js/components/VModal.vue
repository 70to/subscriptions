<template>
    <div>
        <div @click="open = !open">
            <slot name="button"></slot>
        </div>
        <div v-show="open"
             class="fixed z-20 bottom-0 inset-x-0 px-4 pb-6 sm:inset-0 sm:p-0 sm:flex sm:items-center sm:justify-center">
            <transition
                enter-active-class="ease-out duration-300"
                enter-class="opacity-0"
                enter-to-class="opacity-100"
                leave-active-class="ease-in duration-200"
                leave-class="opacity-100"
                leave-to-class="opacity-0"
            >
                <div v-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                     x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                     class="fixed inset-0 transition-opacity">
                    <div @click="open = !open" class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>
            </transition>
            <transition
                enter-active-class="ease-out duration-300"
                enter-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                enter-to-class="opacity-100 translate-y-0 sm:scale-100"
                leave-active-class="ease-in duration-200"
                leave-class="opacity-100 translate-y-0 sm:scale-100"
                leave-to-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            >
                <div ref="modal" v-show="open" style="height: 80%"
                     class="relative lg:max-w-3xl bg-white rounded-lg overflow-auto shadow-xl transform transition-all sm:max-w-sm sm:w-full" >
                    <div class="">
                        <slot name="content"></slot>
                    </div>
                    <slot name="header-left" class="absolute h-6 w-6 text-white cursor-pointer"
                          style="top: 20px; left:20px"></slot>
                    <!--                    <svg fill="currentColor" viewBox="0 0 20 20" class="absolute h-6 w-6 text-white cursor-pointer" style="top: 20px; left:20px"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>-->
                    <svg @click="open = !open" class="absolute h-6 w-6 text-white cursor-pointer"
                         style="top: 20px; right:20px" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </div>
            </transition>
        </div>
    </div>
</template>

<script>
export default {
    data: function () {
        return {
            open: false,
        }
    },
    methods: {
        closeTimeout() {
            setTimeout(() => {
                this.open
            }, 1000);
        },
    },
}
</script>
