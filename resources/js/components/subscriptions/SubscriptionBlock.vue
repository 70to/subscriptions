<template>
    <a :href="'/subscriptions/create?service_id=' + service.id">
        <div class="p-6 mb-4 bg-green-400 flex justify-between items-center" :style="{background:service.color}">
            <h2 class="text-2xl text-white">{{service.name}}</h2>
            <div>
                <svg fill="currentColor" class="text-white h-6" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                          d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                          clip-rule="evenodd"></path>
                </svg>
            </div>
        </div>
    </a>
</template>
<script>
export default {
    props: {
        service: Object
    },
    methods: {

    }
}
</script>
