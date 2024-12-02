import React, {useContext} from "react";
import Project from "../components/Project";
import ProjectsContext from '../context/ProjectsContext'

const Projects = () => {
  const {projects} = useContext(ProjectsContext);
  
  return (
    <div className="projects-container">
      {projects.map((p) => (
        <Project project={p} key={p.id} />
      ))}
    </div>
  );
};

export default Projects;
