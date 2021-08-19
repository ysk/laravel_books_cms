const app = new Vue({
    el: '#bookDelete',
    methods: {
        confirmSubmit(event) {
            const ans = confirm('本当に削除しますか？');
            if(!ans) event.preventDefault();
        }
    }
});