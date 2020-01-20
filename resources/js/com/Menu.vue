<template>
    <div class="container">

      <div style="height: 40px; width:100%; float: center;">
        <el-dropdown   @command="handleCommand">
            <!-- <i class="el-icon-setting" ></i> -->

            <span class="el-dropdown-link" style="display:block; margin: 0px auto;">
                Configuración<i class="el-icon-arrow-down el-icon--right"></i>
            </span>

            <el-dropdown-menu slot="dropdown"  >
                <el-dropdown-item command="1" icon="el-icon-search">Mostrar todo</el-dropdown-item>
                <el-dropdown-item command="2" icon="el-icon-search">Buscar por</el-dropdown-item>
                <el-dropdown-item command="3" icon="el-icon-delete">Seleccionar todo</el-dropdown-item>
            </el-dropdown-menu>
        </el-dropdown>
      </div>

     <!-- <div style="height: 60px; width:100%; float:left;" v-show="selectSettings === '1' "> -->

     <!-- </div> -->
     <div class="animated fast fadeIn" style="height: 45px;" v-show="selectSettings === '2' || selectSettings === '3'" >

        <el-input placeholder="Buscar" v-model="search" v-show="selectSettings === '2' ">
            <el-button slot="append" icon="el-icon-search"></el-button>
        </el-input>

        <el-checkbox v-model="selectAll" v-show="selectSettings === '3'">Seleccionar todo</el-checkbox>

     </div>


    <el-table
        class="animated fast fadeIn"
        :show-header="false"
        :data="message"
        style="width: 100%"
        @current-change="handleCurrentChange"
        :row-class-name="tableRowClassName">
        <el-table-column
        prop="affair"
        width="600">
            <template slot-scope="scope">
                <!-- <i class="el-icon-delete"></i>
                <i class="el-icon-delete-solid"></i> -->
                <el-checkbox  :label="scope.$index" :key="scope.$index"><i class="el-icon-delete"></i></el-checkbox>


                     <span slot="title" style="cursor:pointer;"
                           v-text="message[scope.$index].affair"
                           @click="messages(scope.$index, message)">
                     </span>




            </template>
        </el-table-column>
    </el-table>
    </div>
</template>

<script>



  export default {

    name: "componentMenu",
    props: ['data'],

    data() {
      return {
        search:'',
        selectAll:0,
        selectSettings:null,
        message:[
            { affair:'Entrega de documentos', name: "Adrián", firstName: 'Núñez', SecondName: 'Alanis',
             id_mail: 0 , message: 'Este es un mensaje de prueba'
            },
            {affair: 'Reporte de actividades',
               name: "Jorge", firstName: 'Perez', SecondName: 'Gutierrez',
             id_mail: 0 , message: 'Este es un segundo mensaje de prueba'
            }
        ]
      }
    },
    methods: {
      handleCommand(command) { this.selectSettings = command; },
      messages(index){
        console.log("Este es el indice de los mensajes",this.message[index]);
        // this.tableRowClassName({index,this.message[index] });
      },
      tableRowClassName({row, rowIndex}) {
          console.log("Parametros que pasan por la tabla: Row: ",row," rowIndex: ",rowIndex);
        if (rowIndex === row) {
          return 'warning-row';
        } else if (rowIndex === row) {
          return 'success-row';
        }
        return '';
      }
    }
  };
</script>

<style >
  .el-table .success-row {
    background: #eb0231;
  }
</style>
