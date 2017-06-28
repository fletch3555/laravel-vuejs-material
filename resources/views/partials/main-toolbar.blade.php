<v-toolbar light>
    <v-toolbar-side-icon class="hidden-md-and-up" fixed light @click.native.stop="drawer = !drawer"></v-toolbar-side-icon>
    <v-toolbar-title class="hidden-sm-and-down">Toolbar</v-toolbar-title>
    <v-spacer></v-spacer>
    <v-btn icon light>
        <v-icon>account_circle</v-icon>
    </v-btn>
    <v-btn icon light>
        <v-icon>favorite</v-icon>
    </v-btn>
    <v-btn icon light>
        <v-icon>more_vert</v-icon>
    </v-btn>
</v-toolbar>
