<template>
    <div>
<!--        <div>-->
<!--            <button class="btn btn-primary btn-block" v-on:click="generate">画像を生成</button>-->
<!--        </div>-->
        <div id="capture">
            <div>
                <div v-for="subscription in subscriptions">
                    <subscription-block :service="subscription.service"></subscription-block>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import SubscriptionBlock from "./SubscriptionBlock";
import html2canvas from "html2canvas";

export default {
    components: {
        SubscriptionBlock
    },
    data: function () {
        return {
            keyword: '',
            subscriptions: []
        }
    },
    methods: {
        generate() {
            html2canvas(document.querySelector("#capture")).then(canvas => {
                // document.body.appendChild(canvas)
                const type = 'image/png';
                const dataurl = canvas.toDataURL(type); // this.canvasは用途に合わせて書き換え
                const bin = atob(dataurl.split(',')[1]);
                const buffer = new Uint8Array(bin.length);
                for (let i = 0; i < bin.length; i++) {
                    buffer[i] = bin.charCodeAt(i);
                }
                const blob = new Blob([buffer.buffer], {type: type});
                const data = new FormData();
                data.append('photo', blob, 'image.png'); //'photo'というkeyで保存

                axios.post('/api/tweet', data, {
                    headers: {'content-type': 'multipart/form-data'}
                })
                    .then(res => {
                        console.log('success')
                    }).catch(error => {
                    new Error(error)
                });
            });
        }
    },
    created() {
        axios.get(`/api/my-subscriptions`).then((response) => {
            this.subscriptions = response.data.subscriptions
        }).catch((err) => {
            reject(err)
        })
    },
}
</script>
