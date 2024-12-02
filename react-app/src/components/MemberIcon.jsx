import './../App.css'

//accepts user object having name and color keys
const MemberIcon = ({ user }) => {
  const { name, color } = user;

  return (
    // output a styled div containing user's initial
    <div className={`member-icon ${color}`}>
      {/* extract the first letter of name and display it */}
      <p>{name[0].toUpperCase()}</p>
    </div>
  );
};

export default MemberIcon;
