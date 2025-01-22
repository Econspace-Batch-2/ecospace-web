<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    /**
     * Get all purchases (tutor)
     * Requires ADMIN_KEY authentication
     * 
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $users = User::all();

        return response()->json([
            'data' => $users,
            'message' => 'Users retrieved successfully',
            'status' => 'success'
        ], 200);
    }

    /**
     * Get a specific user
     * Requires ADMIN_KEY authentication
     * 
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */

    public function show($id) {
        $user = User::find($id);

        if ($user) {
            return response()->json([
                'data' => $user,
                'message' => 'User retrieved successfully',
                'status' => 'success'
            ], 200);
        } else {
            return response()->json([
                'message' => 'User not found',
                'status' => 'error'
            ], 404);
        }
    }

    /**
     * Update a specific user
     * Requires ADMIN_KEY authentication
     * 
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */

    public function update(Request $request, $id) {
        $user = User::find($id);

        if ($user) {
            $user->update($request->all());

            return response()->json([
                'data' => $user,
                'message' => 'User updated successfully',
                'status' => 'success'
            ], 200);
        } else {
            return response()->json([
                'message' => 'User not found',
                'status' => 'error'
            ], 404);
        }
    }

    /**
     * Delete a specific user
     * Requires ADMIN_KEY authentication
     * 
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */

    public function destroy($id) {
        $user = User::find($id);

        if ($user) {
            $user->delete();

            return response()->json([
                'message' => 'User deleted successfully',
                'status' => 'success'
            ], 200);
        } else {
            return response()->json([
                'message' => 'User not found',
                'status' => 'error'
            ], 404);
        }
    }
}
