import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { QueuelandAdminComponent } from './queueland-admin.component';

describe('QueuelandAdminComponent', () => {
  let component: QueuelandAdminComponent;
  let fixture: ComponentFixture<QueuelandAdminComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ QueuelandAdminComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(QueuelandAdminComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
