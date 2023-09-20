<!-- CLIPBOARD BUTTON -->
<div @click.stop.prevent="toggle"
     class="bbn-appui-clipboard-button bbn-right-smargin bbn-p bbn-rel">
  <i class="nf nf-fa-clipboard"
     tabindex="-1"/>
  <input class="bbn-invisible bbn-overlay bbn-p"
         @keydown.space.enter.prevent="toggle"
         @drop.prevent.stop="onDrop">
</div>
