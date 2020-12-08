Access WSL files using Win File Explorer using form:
  \\wsl$\Ubuntu-18.04\home\<your_alias>

Get UBUNTU distro using PowerShell:
  PowerShell wsl --list -v


Brazil CLI

Updating the Brazil CLI
  toolbox update brazilcli

Creating a workspace
  brazil ws create --root ~/workplace/workspace_name

  brazil ws create --name ~/workplace/workspace_name

Setting (or changing) the version set to use
  brazil ws use --versionset versionset_name

  You can also set the versionset to use when you first create your Brazil workspace:
  brazil ws create --root ~/workplace/workspace_name --versionset versionset_name

Cloning a package
  brazil ws use --package packagename

Getting information about your workspace
 brazil ws show

Build System

  brail-build
  1. downloads all the build-dependencies into <workspace>/env
  2. Brazil invokes the build-system you specified in Config which will run a shell script

  Can also run:
  brazil-build -verbose
  brazil-build -debug


Updating your workspace
  When you associate a version set with your workspace, it is actually associated with a particular version filter instance (VFI), which is a snapshot of a set of built packages in that version set. Whenever a new package is built into the version set, its VFI number increases.
  You can update the current VFI used by the workspace as well as update any source packages by entering any directory within the workspace and typing:

  brazil ws sync

Deleting a workspace

  To delete a Brazil workspace, go into any directory within it and type:
    brazil ws delete

  Or, from outside of the workspace, provide its path to the --root argument
    brazil ws delete --root ~/workplace/workspace_name

dry run build
  brazil workspace --dryrun


Testing

brazilCLI
  Brazil-build release

  Brazil-build server

integration-test
  brazil-build test-integration-assert-beta



STAGE AND COMMIT CHANGES

1. CHECK CHANGES FILES
  git status


2. STAGE changes
  git add src tst

3. COMMIT CHANGES (DONT PUSH YET)
git commit -m "Implement subtract function and enable subtract unit tests"


4. R EQUEST CODE REVIEW
  cd ~/workplace/<package name>/src/<package name>
    cr

5. FILL OUT CRUX DOCUMENTATION AND SUBMIT REVIEW
