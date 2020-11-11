import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { EntrepriseRegisterComponent } from './entreprise-register.component';

describe('EntrepriseRegisterComponent', () => {
  let component: EntrepriseRegisterComponent;
  let fixture: ComponentFixture<EntrepriseRegisterComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ EntrepriseRegisterComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(EntrepriseRegisterComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
