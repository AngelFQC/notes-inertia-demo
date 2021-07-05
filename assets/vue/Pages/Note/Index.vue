<template>
  <app-layout>
    <template #header>
      <h1>Módulo de notas</h1>
    </template>

    <h3>Listado de notas</h3>

    <p>Toma el registro correcto y ejecuta cualquier función (ver, editar o eliminar)</p>

    <table>
      <thead>
      <tr>
        <th>Extracto</th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="note in notes">
        <td>{{ note.excerpt }}</td>
      </tr>
      </tbody>
    </table>
  </app-layout>
</template>

<script>
import AppLayout from "../../Layout/AppLayout";

export default {
  name: "Index",
  components: {AppLayout},
  props: {
    notes: Array,
  }
}
</script>
