<?php

use Illuminate\Database\Seeder;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'user_management_access',],
            ['id' => 2, 'title' => 'permission_access',],
            ['id' => 3, 'title' => 'permission_create',],
            ['id' => 4, 'title' => 'permission_edit',],
            ['id' => 5, 'title' => 'permission_view',],
            ['id' => 6, 'title' => 'permission_delete',],
            ['id' => 7, 'title' => 'role_access',],
            ['id' => 8, 'title' => 'role_create',],
            ['id' => 9, 'title' => 'role_edit',],
            ['id' => 10, 'title' => 'role_view',],
            ['id' => 11, 'title' => 'role_delete',],
            ['id' => 12, 'title' => 'user_access',],
            ['id' => 13, 'title' => 'user_create',],
            ['id' => 14, 'title' => 'user_edit',],
            ['id' => 15, 'title' => 'user_view',],
            ['id' => 16, 'title' => 'user_delete',],
            ['id' => 17, 'title' => 'book_access',],
            ['id' => 18, 'title' => 'user_action_access',],
            ['id' => 19, 'title' => 'user_action_create',],
            ['id' => 20, 'title' => 'user_action_edit',],
            ['id' => 21, 'title' => 'user_action_view',],
            ['id' => 22, 'title' => 'user_action_delete',],
            ['id' => 23, 'title' => 'internal_notification_access',],
            ['id' => 24, 'title' => 'internal_notification_create',],
            ['id' => 25, 'title' => 'internal_notification_edit',],
            ['id' => 26, 'title' => 'internal_notification_view',],
            ['id' => 27, 'title' => 'internal_notification_delete',],
            ['id' => 28, 'title' => 'category_access',],
            ['id' => 29, 'title' => 'category_create',],
            ['id' => 30, 'title' => 'category_edit',],
            ['id' => 31, 'title' => 'category_view',],
            ['id' => 32, 'title' => 'category_delete',],
            ['id' => 33, 'title' => 'book_create',],
            ['id' => 34, 'title' => 'book_edit',],
            ['id' => 35, 'title' => 'book_view',],
            ['id' => 36, 'title' => 'book_delete',],
            ['id' => 37, 'title' => 'contact_management_access',],
            ['id' => 38, 'title' => 'contact_management_create',],
            ['id' => 39, 'title' => 'contact_management_edit',],
            ['id' => 40, 'title' => 'contact_management_view',],
            ['id' => 41, 'title' => 'contact_management_delete',],
            ['id' => 42, 'title' => 'contact_company_access',],
            ['id' => 43, 'title' => 'contact_company_create',],
            ['id' => 44, 'title' => 'contact_company_edit',],
            ['id' => 45, 'title' => 'contact_company_view',],
            ['id' => 46, 'title' => 'contact_company_delete',],
            ['id' => 47, 'title' => 'contact_access',],
            ['id' => 48, 'title' => 'contact_create',],
            ['id' => 49, 'title' => 'contact_edit',],
            ['id' => 50, 'title' => 'contact_view',],
            ['id' => 51, 'title' => 'contact_delete',],
            ['id' => 52, 'title' => 'basic_crm_access',],
            ['id' => 53, 'title' => 'basic_crm_create',],
            ['id' => 54, 'title' => 'basic_crm_edit',],
            ['id' => 55, 'title' => 'basic_crm_view',],
            ['id' => 56, 'title' => 'basic_crm_delete',],
            ['id' => 57, 'title' => 'crm_status_access',],
            ['id' => 58, 'title' => 'crm_status_create',],
            ['id' => 59, 'title' => 'crm_status_edit',],
            ['id' => 60, 'title' => 'crm_status_view',],
            ['id' => 61, 'title' => 'crm_status_delete',],
            ['id' => 62, 'title' => 'crm_customer_access',],
            ['id' => 63, 'title' => 'crm_customer_create',],
            ['id' => 64, 'title' => 'crm_customer_edit',],
            ['id' => 65, 'title' => 'crm_customer_view',],
            ['id' => 66, 'title' => 'crm_customer_delete',],
            ['id' => 67, 'title' => 'crm_note_access',],
            ['id' => 68, 'title' => 'crm_note_create',],
            ['id' => 69, 'title' => 'crm_note_edit',],
            ['id' => 70, 'title' => 'crm_note_view',],
            ['id' => 71, 'title' => 'crm_note_delete',],
            ['id' => 72, 'title' => 'crm_document_access',],
            ['id' => 73, 'title' => 'crm_document_create',],
            ['id' => 74, 'title' => 'crm_document_edit',],
            ['id' => 75, 'title' => 'crm_document_view',],
            ['id' => 76, 'title' => 'crm_document_delete',],
            ['id' => 77, 'title' => 'team_access',],
            ['id' => 78, 'title' => 'team_create',],
            ['id' => 79, 'title' => 'team_edit',],
            ['id' => 80, 'title' => 'team_view',],
            ['id' => 81, 'title' => 'team_delete',],
            ['id' => 82, 'title' => 'time_management_access',],
            ['id' => 83, 'title' => 'time_management_create',],
            ['id' => 84, 'title' => 'time_management_edit',],
            ['id' => 85, 'title' => 'time_management_view',],
            ['id' => 86, 'title' => 'time_management_delete',],
            ['id' => 87, 'title' => 'time_work_type_access',],
            ['id' => 88, 'title' => 'time_work_type_create',],
            ['id' => 89, 'title' => 'time_work_type_edit',],
            ['id' => 90, 'title' => 'time_work_type_view',],
            ['id' => 91, 'title' => 'time_work_type_delete',],
            ['id' => 92, 'title' => 'time_project_access',],
            ['id' => 93, 'title' => 'time_project_create',],
            ['id' => 94, 'title' => 'time_project_edit',],
            ['id' => 95, 'title' => 'time_project_view',],
            ['id' => 96, 'title' => 'time_project_delete',],
            ['id' => 97, 'title' => 'time_entry_access',],
            ['id' => 98, 'title' => 'time_entry_create',],
            ['id' => 99, 'title' => 'time_entry_edit',],
            ['id' => 100, 'title' => 'time_entry_view',],
            ['id' => 101, 'title' => 'time_entry_delete',],
            ['id' => 102, 'title' => 'expense_management_access',],
            ['id' => 103, 'title' => 'expense_management_create',],
            ['id' => 104, 'title' => 'expense_management_edit',],
            ['id' => 105, 'title' => 'expense_management_view',],
            ['id' => 106, 'title' => 'expense_management_delete',],
            ['id' => 107, 'title' => 'time_report_access',],
            ['id' => 108, 'title' => 'time_report_create',],
            ['id' => 109, 'title' => 'time_report_edit',],
            ['id' => 110, 'title' => 'time_report_view',],
            ['id' => 111, 'title' => 'time_report_delete',],
            ['id' => 112, 'title' => 'expense_category_access',],
            ['id' => 113, 'title' => 'expense_category_create',],
            ['id' => 114, 'title' => 'expense_category_edit',],
            ['id' => 115, 'title' => 'expense_category_view',],
            ['id' => 116, 'title' => 'expense_category_delete',],
            ['id' => 117, 'title' => 'income_category_access',],
            ['id' => 118, 'title' => 'income_category_create',],
            ['id' => 119, 'title' => 'income_category_edit',],
            ['id' => 120, 'title' => 'income_category_view',],
            ['id' => 121, 'title' => 'income_category_delete',],
            ['id' => 122, 'title' => 'income_access',],
            ['id' => 123, 'title' => 'income_create',],
            ['id' => 124, 'title' => 'income_edit',],
            ['id' => 125, 'title' => 'income_view',],
            ['id' => 126, 'title' => 'income_delete',],
            ['id' => 127, 'title' => 'expense_access',],
            ['id' => 128, 'title' => 'expense_create',],
            ['id' => 129, 'title' => 'expense_edit',],
            ['id' => 130, 'title' => 'expense_view',],
            ['id' => 131, 'title' => 'expense_delete',],

        ];

        foreach ($items as $item) {
            \App\Permission::create($item);
        }
    }
}
