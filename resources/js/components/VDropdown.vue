<template>
    <div @keyup.esc="open = false" class="relative inline-block text-left">
        <div>
            <button @click.prevent="toggle"
                    class="flex items-center text-gray-400 hover:text-gray-600 focus:outline-none focus:text-gray-600">
                <slot name="activator"/>
            </button>
        </div>
        <transition
            enter-active-class="duration-150 ease-out"
            enter-class="opacity-0 scale-95"
            enter-to-class="opacity-100 scale-100"
            leave-active-class="duration-100 ease-in"
            leave-class="opacity-100 scale-100"
            leave-to-class="opacity-0 scale-95"
        >
            <div v-show="open" class="origin-top-right absolute right-0 mt-2 rounded-md shadow-lg z-20" :class="width">
                <div class="rounded-md bg-white shadow-xs">
                    <div class="py-1">
                        <slot name="content"></slot>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
    export default {
        props: {
            width: String,
        },
        data() {
            return {
                open: false,
            };
        },
        methods: {
            toggle() {
                this.open = !this.open;
            }
        },
        mounted() {
            document.addEventListener('click', evt => {
                evt.stopPropagation();
                if (!this.$el.contains(evt.target)) {
                    this.open = false;
                }
            });
        }
    }
</script>
