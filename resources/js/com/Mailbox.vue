<template>
    <div>


<el-row :gutter="20" class="animated fast fadeIn">
  <el-col :span="24">
      <div>
          <h3>Mailbox</h3>
          <hr>
      </div>
  </el-col>
</el-row>


<el-container style=" border: 1px solid #eee" class="animated fast fadeIn">

    <el-menu default-active="2" class="el-menu-vertical-demo" @open="handleOpen" @close="handleClose" :collapse="isCollapse">
        <el-menu-item index="1" @click="isCollapse = !isCollapse">
            <!-- <span slot="title" >MailBox</span> -->
            <i class="el-icon-arrow-left" v-show="isCollapse===false"></i>
            <i class="el-icon-arrow-right" v-show="isCollapse===true" ></i>
        </el-menu-item>
        <el-row :gutter="24" class="animated fast fadeIn" v-if="isCollapse === false">
            <el-col :span="24">
                <el-tabs v-model="editableTabsValue" type="border-card" :stretch="true" >
                    <el-tab-pane v-for="(item, index) in editableTabs" :key="index" :label="item.title" :name="item.id" class="animated fast fadeIn">
                        <component v-if="item.id ==='1'" :data="item" :topic="item" :is="item.component"></component>
                        <component v-if="item.id ==='2'" :data="item" :topic="item" :is="item.component"></component>
                        <component v-if="item.id ==='3'" :data="item" :topic="item" :is="item.component"></component>
                    </el-tab-pane>
                </el-tabs>
            </el-col>
        </el-row>
    </el-menu>

  <el-container>
    <el-header style="text-align: right; font-size: 12px" class="el-header">
      <el-dropdown>
        <i class="el-icon-setting" style="margin-right: 15px"></i>
        <el-dropdown-menu slot="dropdown">
          <el-dropdown-item>View</el-dropdown-item>
          <el-dropdown-item>Add</el-dropdown-item>
          <el-dropdown-item>Delete</el-dropdown-item>
        </el-dropdown-menu>
      </el-dropdown>
      <span>Tom</span>
    </el-header>

    <el-main>

    <el-row>
    <el-col :span="8"><div>dddddddddd</div></el-col>
    <el-col :span="8"><div>hhhhhhhh</div></el-col>
    <el-col :span="8"><div>jjjjjjj</div></el-col>
    </el-row>




    </el-main>
  </el-container>

</el-container>




    </div>
</template>

<script>
  import componentMenu from './Menu.vue';

  export default {

    components:{ componentMenu },
    name: "component-mailbox",

    data() {
      return {
        isCollapse: false,

        editableTabsValue: '3',
        editableTabs: [
          {
            id: '1',
            title: 'Bandeja de entrada',
            component: 'componentMenu'
          },
          {
            id: '2',
            title: 'Elementos enviados',
            component: 'componentMenu'
          },
          {
            id: '3',
            title: 'Elementos eliminados',
            component: 'componentMenu'
          },
          ],
        tabIndex: 2
      }
    },
    methods: {
      handleOpen(key, keyPath) {
        console.log(key, keyPath);
      },
      handleClose(key, keyPath) {
        console.log(key, keyPath);
      },


     handleTabsEdit(targetName, action) {
        if (action === 'add') {
          let newTabName = ++this.tabIndex + '';
          this.editableTabs.push({
            title: 'New Tab',
            name: newTabName,
            content: 'New Tab content'
          });
          this.editableTabsValue = newTabName;
        }
        if (action === 'remove') {
          let tabs = this.editableTabs;
          let activeName = this.editableTabsValue;
          if (activeName === targetName) {
            tabs.forEach((tab, index) => {
              if (tab.name === targetName) {
                let nextTab = tabs[index + 1] || tabs[index - 1];
                if (nextTab) {
                  activeName = nextTab.name;
                }
              }
            });
          }

          this.editableTabsValue = activeName;
          this.editableTabs = tabs.filter(tab => tab.name !== targetName);
        }





    }
    }
  };
</script>

<style>
  .el-header {
    background-color: #B3C0D1;
    color: #333;
    line-height: 60px;
  }

  .el-aside {
    color: #333;
  }

 /* ANIMATED */


 .animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.fast {
  -webkit-animation-duration: 0.4s;
  animation-duration: 0.4s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

.fadeIn {
  animation-name: fadeIn;
}



</style>
