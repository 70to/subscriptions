<template>
    <div>
        <label class="typo__label">Select with search</label>
        <multiselect name="test" v-model="value" value="value" :options="options" :custom-label="nameWithLang" placeholder="Select one" label="name" track-by="name"></multiselect>
    </div>
</template>

<script>
    import Multiselect from 'vue-multiselect'
    export default {
        components: {
            Multiselect
        },
        data () {
            return {
                value: { name: 'Vue.js', language: 'JavaScript' },
                options: [
                    { name: 'Vue.js', language: 'JavaScript' },
                    { name: 'Rails', language: 'Ruby' },
                    { name: 'Sinatra', language: 'Ruby' },
                    { name: 'Laravel', language: 'PHP' },
                    { name: 'Phoenix', language: 'Elixir' }
                ]
            }
        },
        methods: {
            nameWithLang ({ name, language }) {
                return `${name} — [${language}]`
            }
        }
    }

</script>

<!-- New step!
     Add Multiselect CSS. Can be added as a static asset or inside a component. -->
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
