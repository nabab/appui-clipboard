(() => {
  return {
    data() {
      return {
        root: appui.plugins['appui-clipboard'] + '/'
      };
    },
    methods: {
      toggle() {
        const cp = appui.getRegistered('clipboard');
        if (cp) {
          cp.toggle();
        }
      },
      onDrop(ev) {
        const cp = appui.getRegistered('clipboard');
        if (cp) {
          cp.copy(ev);
          cp.show();
        }
      }
    },
    created() {
      appui.register('clipboard-button', this);
    }
  }
})();