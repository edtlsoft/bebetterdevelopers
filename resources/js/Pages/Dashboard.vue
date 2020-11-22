<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Personal profesional</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="col-12">
            <button type="button" @click="abrirModal()" class="inline-flex justify-center mx-right py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Nuevo</button>
          </div>
          <!-- This example requires Tailwind CSS v2.0+ -->
          <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                      <tr>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Opciones</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombres y Apellidos</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cedula</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha de nacimiento</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Profesion</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dirección</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Municipio</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Telefono</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sexo</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Vehiculo</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Marca</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Año</th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <tr v-for="(profesional, indice) in profesionales" :key="profesional.id">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ profesional.id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex justify-between">
                            <button type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Editar</button>
                            <button type="button" @click="deleteProfesional(profesional.id, indice)" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Eliminar</button>
                          </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ profesional.nombre }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ profesional.cedula }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ profesional.fecha_nacimiento }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ profesional.profesion.nombre }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ profesional.direccion }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ profesional.municipio.nombre }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ profesional.telefono }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ profesional.sexo == "M" ? "Masculino" : "Femenino" }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ profesional.vehiculo ? profesional.vehiculo.tipo : "" }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ profesional.vehiculo ? profesional.vehiculo.marca : "" }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ profesional.vehiculo ? profesional.vehiculo.ano : "" }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div v-if="modal" class="fixed z-10 inset-0 overflow-y-auto">
      <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
          <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start">
              <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">Profesional</h3>
                <div class="mt-2">
                  <p class="text-sm text-gray-500">Are you sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Deactivate</button>
            <button type="button" @click="cerrarModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
              Cancel
            </button>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Welcome from "@/Jetstream/Welcome";

export default {
  components: {
    AppLayout,
    Welcome,
  },
  props: {
    profesionales: {
      type: Array,
      required: true,
    },
  },
  data() {
      return({
        modal: false,
      })
  },
  methods: {
      abrirModal() {
          this.modal = true;
      },
      cerrarModal() {
          this.modal = false;
      },
      deleteProfesional(profesional_id, indice) {
          axios.delete(`/profesionales/${profesional_id}`)
          .then(response => {
              this.profesionales.splice(indice, 1)
          })
          .catch(error => {
              alert('Error: '+ error)
          })
      },
  },
};
</script>
