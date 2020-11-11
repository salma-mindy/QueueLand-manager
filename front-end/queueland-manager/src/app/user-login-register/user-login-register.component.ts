import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators, NgForm } from '@angular/forms';
import { first } from 'rxjs/operators';
import { Router } from '@angular/router';
import { ApiService } from '../api.service';
import { error } from '@angular/compiler/src/util';

@Component({
  selector: 'app-user-login-register',
  templateUrl: './user-login-register.component.html',
  styleUrls: ['./user-login-register.component.css']
})
export class UserLoginRegisterComponent implements OnInit {
  angForm: FormGroup;

  constructor(
    private fb: FormBuilder,
    private dataService: ApiService,
    private router: Router) { 
      this.angForm = this.fb.group({
        email: ['', [Validators.required, Validators.minLength(1), Validators.email]],
        motDePasse: ['', Validators.required],
        nom: ['', Validators.required],
        numeroTel: ['', Validators.required]
      });
     }

  ngOnInit(): void {

  }
  postdata(angForm1){
    this.dataService.userlogin(angForm1.value.email, angForm1.value.motDePasse)
    .pipe(first())
    .subscribe(
      data => {
        const redirect = this.dataService.redirectUrl ? this.dataService.redirectUrl: '/user-dashboard';
        this.router.navigate([redirect]);
      }, 
        error => {
          alert("email ou mot de passe incorrect")
        }
    );
  }

  postdata1(angForm1){
    this.dataService.userregistration(angForm1.value.nom,angForm1.value.email, angForm1.value.numeroTel ,angForm1.value.motDePasse)
    .pipe(first())
    .subscribe(
      data => {
        this.router.navigate(['user-login-register']);
      }, 
        error => {
        }
    );
  }
  get nom(){
    return this.angForm.get('nom');
  }

  get email(){
    return this.angForm.get('email');
  }
  get numeroTel(){
    return this.angForm.get('numeroTel');
  }
  get motDePasse(){
    return this.angForm.get('motDePasse');
  }
}