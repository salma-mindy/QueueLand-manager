import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { HomeComponent } from './home/home.component';
import { NotFoundComponent } from './not-found/not-found.component';
import { NavbarComponent } from './navbar/navbar.component';
import { FooterComponent } from './footer/footer.component';
import { UserLoginRegisterComponent } from './user-login-register/user-login-register.component';
import { UserDashboardComponent } from './user-dashboard/user-dashboard.component';
import { EntrepriseLoginRegisterComponent } from './entreprise-login-register/entreprise-login-register.component';
import { ContactComponent } from './contact/contact.component';
import { EntrepriseDashboardComponent } from './entreprise-dashboard/entreprise-dashboard.component';

import { AuthguardGuard } from './authguard.guard';
import { UserRegisterComponent } from './user-register/user-register.component';
import { EntrepriseRegisterComponent } from './entreprise-register/entreprise-register.component';
import { PlusInfoComponent } from './plus-info/plus-info.component';
import { CltDashboardComponent } from './clt-dashboard/clt-dashboard.component';
import { QueuelandAdminComponent } from './queueland-admin/queueland-admin.component';
import { LoginComponent } from './login/login.component';
import { RegisterComponent } from './register/register.component';
import { AdminDashboardComponent } from './admin-dashboard/admin-dashboard.component';

const appRoutes: Routes = [
  {
    path: '',
    component: RegisterComponent 
  },
  {
    path: 'login',
    component: LoginComponent
  },
  {
    path: 'admin-dashboard',
    component: AdminDashboardComponent
  },
  {
    path: 'home',
    component: HomeComponent
  },
  {
    path: 'user-login-register',
    component: UserLoginRegisterComponent
  },
  {
    path: 'user-register',
    component: UserRegisterComponent
  },
  {
    path: 'user-dashboard',
    component: UserDashboardComponent,
    canActivate: [AuthguardGuard]
  },
  {
    path: 'entreprise-login-register',
    component: EntrepriseLoginRegisterComponent
  },
  {
    path: 'entreprise-register',
    component: EntrepriseRegisterComponent
  },
  {
    path: 'entreprise-dashboard',
    component: EntrepriseDashboardComponent
  },
  {
    path: 'contact',
    component: ContactComponent
  },
  {
    path: 'plus-info',
    component: PlusInfoComponent
  },

  {
    path: 'clt-dashboard',
    component: CltDashboardComponent
  },
  {
    path: 'queueland-admin',
    component: QueuelandAdminComponent
  },
  {
    path: '**',
    component: NotFoundComponent
  },

];

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    NotFoundComponent,
    NavbarComponent,
    FooterComponent,
    UserLoginRegisterComponent,
    UserDashboardComponent,
    EntrepriseLoginRegisterComponent,
    ContactComponent,
    EntrepriseDashboardComponent,
    UserRegisterComponent,
    EntrepriseRegisterComponent,
    PlusInfoComponent,
    CltDashboardComponent,
    QueuelandAdminComponent,
    LoginComponent,
    RegisterComponent,
    AdminDashboardComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpClientModule,
    ReactiveFormsModule,
    AppRoutingModule,
    NgbModule,
    RouterModule.forRoot(
      appRoutes
    )
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
