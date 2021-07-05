<template>
  <div>
    <header>
      <slot name="header"></slot>
    </header>

    <main>
      <slot></slot>
    </main>

    <footer>
      <slot name="footer">
        Symfony + inertia.js
      </slot>
    </footer>
  </div>
</template>

