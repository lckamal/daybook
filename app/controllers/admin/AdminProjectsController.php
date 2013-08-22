<?php

class AdminProjectsController extends AdminController {

	/**
	 * Project Repository
	 *
	 * @var Project
	 */
	protected $project;

    //public $restful = true;

	public function __construct(Project $project)
	{
        parent::__construct();
		$this->project = $project;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		
        $title = Lang::get('admin/projects/title.project_management');

		$projects = Project::all();

        return View::make('admin/projects/index', compact('title', 'projects'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
        // Title
        $title = Lang::get('admin/projects/title.create_a_new_project');

        // Show the project
        return View::make('admin/projects/create_edit', compact('title'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postCreate()
	{
        // Declare the rules for the form validation
        $rules = array(
            'name'   => 'required|min:3',
            'content' => 'required'
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            // Create a new blog post
            $this->project->name = Input::get( 'name' );
            $this->project->slug = Str::slug(Input::get('name'));
            $this->project->content = Input::get( 'content' );
            $this->project->status = Input::get( 'status' );

            $this->project->save();
            
            if ( $this->project->id )
            {
                // Redirect to the new project
                return Redirect::to('admin/projects/' . $this->project->id . '/edit')->with('success', Lang::get('admin/projects/messages.create.success'));
            }
            else
            {
                // Get validation errors (see Ardent package)
                $error = $this->project->errors()->all();

                return Redirect::to('admin/projects/create')
                    ->with( 'error', $error );
            }
        }

        // Form validation failed
        return Redirect::to('admin/projects/create')->withInput()->withErrors($validator);
	}
	
    /**
     * Show the form for editing the specified resource.
     *
     * @param $project
     * @return Response
     */
    public function getEdit($project)
    {
        if ( $project->id )
        {
            // Title
            $title = Lang::get('admin/projects/title.project_update');
            // mode
            $mode = 'edit';

            return View::make('admin/projects/create_edit', compact('project', 'title', 'mode'));
        }
        else
        {
            return Redirect::to('admin/projects')->with('error', Lang::get('admin/users/messages.does_not_exist'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $project
     * @return Response
     */
    public function postEdit($project)
    {
        // Declare the rules for the form validation
        $rules = array(
            'name'   => 'required|min:3',
            'content' => 'required'
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            // Was the project updated?
            if ($project->save())
            {
                // Redirect to the project project
                return Redirect::to('admin/projects/' . $project->id . '/edit')->with('success', Lang::get('admin/projects/messages.update.success'));
            }
            else
            {
                // Redirect to the project project
                return Redirect::to('admin/projects/' . $project->id . '/edit')->with('error', Lang::get('admin/projects/messages.update.error'));
            }
        }

        // Form validation failed
        return Redirect::to('admin/projects/' . $project->id . '/edit')->withInput()->withErrors($validator);
    }

    /**
     * Remove the specified user from storage.
     *
     * @param $role
     * @internal param $id
     * @return Response
     */
    public function getDelete($project)
    {
        //echo $projectId;exit;
        //$project = Project::find($projectId);
            // Was the role deleted?
            if($project->delete()) {
                // Redirect to the role management project
                return Redirect::to('admin/projects')->with('success', Lang::get('admin/projects/messages.delete.success'));
            }

            // There was a problem deleting the role
            return Redirect::to('admin/projects')->with('error', Lang::get('admin/projects/messages.delete.error'));
    }

	/**
     * Show a list of all the projects formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function getData()
    {
        $projects = Project::select(array('projects.id',  'projects.name', 'projects.slug', 'projects.status'));

        return Datatables::of($projects)

        ->add_column('actions', '<a href="{{{ URL::to(\'admin/projects/\' . $id . \'/edit\' ) }}}" class="iframe btn btn-mini">{{{ Lang::get(\'button.edit\') }}}</a>
                               <a href="{{{ URL::to(\'admin/projects/\' . $id . \'/delete\' ) }}}" class="btn btn-mini btn-danger">{{{ Lang::get(\'button.delete\') }}}</a>
                               
            ')

        ->remove_column('id')

        ->make();
    }

}