<template>
  <section>
    <h2 class="reveal">&#64;adamsochorec</h2>
    <div class="grid-container">
      <ul v-for="(group, groupIdx) in references" :key="groupIdx">
        <li
          v-for="(ref, idx) in group"
          :key="ref.href"
          :class="['reveal', ref.hide ? 'hideLi' : '']"
        >
          <a target="_blank" rel="noopener noreferrer" :href="ref.href">
            {{ ref.text }}
          </a>
        </li>
      </ul>
    </div>
    <div id="contact"></div>
  </section>
</template>

<script setup>
const references = [
  [
    {
      href: "https://www.brothers-brick.com/2017/08/21/forgotten-not-gone/",
      text: "The Brothers Brick",
    },
    {
      href: "https://www.brothers-brick.com/2017/08/27/post-apocalyptic-friendships-best/",
      text: "The Brothers Brick",
    },
    {
      href: "https://gjjlc.lixin.edu.cn/jdxw/109749.htm",
      text: "Shanghai Lixin University",
    },
    {
      href: "https://gjjlc.lixin.edu.cn/jdxw/106321.htm",
      text: "Shanghai Lixin University",
    },
  ],
  [
    {
      href: "https://www.divadlodisk.cz/repertoar/hrdina-zapadu-83",
      text: "Divadlo Disk",
    },
    {
      href: "https://www.instagram.com/p/CPkl9MtKWiz/?igshid=YmMyMTA2M2Y=",
      text: "Divadlo Na Vinohradech",
    },
    {
      href: "https://www.artivistlab.info/purano-hangos/exhibitions-photo-album",
      text: "Artivist Lab",
    },
    {
      href: "https://www.respekt.cz/galerie/cool-kids-saving-hot-planet",
      text: "Respekt",
    },
    {
      href: "https://www.hatefree.cz/clanky/tamara-moyzes-2",
      text: "HateFree",
      hide: true,
    },
  ],
];
</script>
