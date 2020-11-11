import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { EntrepriseLoginRegisterComponent } from './entreprise-login-register.component';

describe('EntrepriseLoginRegisterComponent', () => {
  let component: EntrepriseLoginRegisterComponent;
  let fixture: ComponentFixture<EntrepriseLoginRegisterComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ EntrepriseLoginRegisterComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(EntrepriseLoginRegisterComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
