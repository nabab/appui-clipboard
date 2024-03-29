(() => {
  return {
    data() {
      return {
        root: appui.plugins['appui-clipboard'] + '/'
      };
    },
    methods: {
      onCopy() {
        const cpb = appui.getRegistered('clipboard-button');
        if (cpb) {
          cpb.$el.style.color = 'green';
          setTimeout(() => {
            cpb.$el.style.color = null;
          }, 250);
        }
      }
    },
    mounted() {
      appui.register('clipboard', this.getRef('clipboard'));
    }
  }
})();