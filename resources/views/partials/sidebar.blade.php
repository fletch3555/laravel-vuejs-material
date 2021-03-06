<v-navigation-drawer persistent hide-overlay enable-resize-watcher v-model="drawer">
    <v-list class="pa-0">
        <v-list-item>
            <v-list-tile avatar tag="div">
                <v-list-tile-avatar>
                    <img src="https://randomuser.me/api/portraits/men/85.jpg" />
                </v-list-tile-avatar>
                <v-list-tile-content>
                    <v-list-tile-title>John Leider</v-list-tile-title>
                </v-list-tile-content>
                <v-list-tile-action>
                    <v-btn icon @click.native.stop="mini = !mini">
                        <v-icon>chevron_left</v-icon>
                    </v-btn>
                </v-list-tile-action>
            </v-list-tile>
        </v-list-item>
    </v-list>
    <v-list class="pt-0" dense>
        <v-divider></v-divider>
        <v-list-item v-for="item in items" :key="item">
            <v-list-tile>
                <v-list-tile-action>
                    <v-icon>@{{ item.icon }}</v-icon>
                </v-list-tile-action>
                <v-list-tile-content>
                    <v-list-tile-title>@{{ item.title }}</v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
        </v-list-item>
    </v-list>

    <v-list>
        <v-list-item v-for="(item, i) in items" :key="i">
            <v-list-tile value="true">
                <v-list-tile-action>
                    <v-icon light v-html="item.icon"></v-icon>
                </v-list-tile-action>
                <v-list-tile-content>
                    <v-list-tile-title v-text="item.title"></v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
        </v-list-item>
    </v-list>
</v-navigation-drawer>