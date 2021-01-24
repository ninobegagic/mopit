<template>
    <div>
<div class="w-36 h-36 bg-blue-300" @click="najava"><slot></slot> </div>
    </div>
</template>

<script>
    export default {
       
        methods: {
            najava(){
                alert("ovo nije alert")
            }
        }
    }
</script>

<style scoped>

</style>