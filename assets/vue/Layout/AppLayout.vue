<template>
  <div>
    <nav>
      <ul>
        <li>
          <inertia-link :href="route('dashboard')">Dashboard</inertia-link>
        </li>
        <li>
          <inertia-link :href="route('note')">Notas</inertia-link>
        </li>
      </ul>
    </nav>
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

