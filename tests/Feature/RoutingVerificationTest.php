<?php

namespace Tests\Feature;

use Tests\TestCase;

class RoutingVerificationTest extends TestCase
{
    /**
     * Test P0: Static Route (Home)
     */
    public function test_home_route_is_accessible()
    {
        $response = $this->get(route('home'));
        $response->assertStatus(200);
        $response->assertSee('Arya Rangga');
        $response->assertSee('Matriks Implementasi Routing Laravel');
    }

    /**
     * Test P0 & P1: Required Param with Regex Constraint (Student Profile)
     */
    public function test_student_profile_with_valid_10_digit_nrp()
    {
        $response = $this->get(route('student.show', ['nrp' => '5025241072']));
        $response->assertStatus(200);
        $response->assertSee('5025241072');
    }

    public function test_student_profile_rejects_alphanumeric_or_invalid_length_nrp()
    {
        // 5 digit numeric -> regex fails, falls to fallback 404
        $response1 = $this->get('/mahasiswa/12345');
        $response1->assertStatus(404);

        // Alpha characters -> regex fails, falls to fallback 404
        $response2 = $this->get('/mahasiswa/abcdefghij');
        $response2->assertStatus(404);
    }

    /**
     * Test P0: Optional Parameter (Agent Route)
     */
    public function test_agent_route_without_param_uses_default_theme()
    {
        $response = $this->get(route('agent.show'));
        $response->assertStatus(200);
        $response->assertSee('General Assistant Agent');
    }

    public function test_agent_route_with_custom_theme()
    {
        $response = $this->get(route('agent.show', ['tema' => 'academic']));
        $response->assertStatus(200);
        $response->assertSee('Academic Agent');
    }

    /**
     * Test P1: GPA Calculator
     */
    public function test_gpa_calculator_computes_average_correctly()
    {
        $response = $this->get(route('academic.gpa.calculate', ['ip1' => '3.50', 'ip2' => '3.80']));
        $response->assertStatus(200);
        $response->assertSee('3.65');
        $response->assertSee('Cum Laude');
    }

    /**
     * Test P1: Dashboard Route Group with Prefix
     */
    public function test_dashboard_group_routes()
    {
        $response = $this->get(route('dashboard.index'));
        $response->assertStatus(200);
        $response->assertSee('Control Center');

        // Test dashboard profile redirect
        $redirectResponse = $this->get(route('dashboard.profile'));
        $redirectResponse->assertRedirect(route('student.show', ['nrp' => '5025241072']));
    }

    /**
     * Test P1: Route Fallback Handler
     */
    public function test_fallback_route_renders_custom_404()
    {
        $response = $this->get('/non-existent-route-random-url');
        $response->assertStatus(404);
        $response->assertSee('Halaman Tidak Ditemukan');
        $response->assertSee('Kembali ke Halaman Utama');
    }
}
